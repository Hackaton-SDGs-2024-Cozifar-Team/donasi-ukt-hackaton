<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\DonationRegistration;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    public function index()
    {
        $totalDonation = DetailDonation::sum('nominal_donation');
        $recipients = DonationRegistration::where('status', 'confirm')->get();
        $recipientCount = $recipients->count();

        $nominalAcceptedDefault = $recipientCount > 0 ? $totalDonation / $recipientCount : 0;

        $totalAccepted = 0;
        foreach ($recipients as $recipient) {
            $nowUkt = $recipient->student->academic_information->now_ukt;
            $recipient->nominal_accepted = min($nominalAcceptedDefault, $nowUkt);
            $totalAccepted += $recipient->nominal_accepted;
            $recipient->save();
        }

        $remainingDonation = $totalDonation - $totalAccepted;

        $recipientsNeedingMore = $recipients->filter(function ($recipient) {
            return $recipient->nominal_accepted < $recipient->student->academic_information->now_ukt;
        });

        $recipientsNeedingMoreCount = $recipientsNeedingMore->count();

        if ($recipientsNeedingMoreCount > 0) {
            $additionalDonationPerRecipient = $remainingDonation / $recipientsNeedingMoreCount;

            foreach ($recipientsNeedingMore as $recipient) {
                $nowUkt = $recipient->student->academic_information->now_ukt;
                $currentAccepted = $recipient->nominal_accepted;
                $difference = $nowUkt - $currentAccepted;

                if ($difference > 0) {
                    $recipient->nominal_accepted += min($difference, $additionalDonationPerRecipient); // Use nominal_accepted here
                    $recipient->save();
                }
            }
        }

        return view('admin.layouts.recipient', [
            "title" => "Penerima Donasi",
            "recipients" => $recipients
        ]);
    }
}
