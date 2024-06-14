<?php

namespace App\Http\Controllers;

use App\Models\DetailDonation;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        return view('all-role.layouts.donation');
    }
    
    public function getToken(Request $request){

        $rand_id = "ORD".time().rand(1,9);
        
        $donation = Donation::create([
            "id_donation"=> $rand_id,
            "id_user"=> $request->user_id,
            "status"=> "unpaid",
        ]);

        $detail_donation = DetailDonation::create([
            "id_donation"=> $donation->id_donation,
            "id_periode"=> 1,
            "donation_date"=> now(),
            "nominal_donation"=> $request->price,
            "payment_methode"=> "bca",
        ]);



        // return response()->json(['token'=> $request->id]);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config("midtrans.server_key");
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $user = User::find($request->user_id);
        $params = array(
            'transaction_details' => array(
                'order_id' => "$donation->id_donation",
                'gross_amount' => $detail_donation->nominal_donation
            ),
            'item_details'=> array(
                [
                    'name'=> 'Donasi UKT',
                'price'=> $request->price,
                'quantity'=> 1,
                'id'=> 1,
                ]
            ),
            'customer_details' => array(
                'first_name' => $user->full_name,
                'last_name' => '.',
                'email' => $user->email,
                'phone' => $request->no_telp,
                'address'=> $request->address,
            ),
        );
             
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return response()->json(['token'=> $snapToken]);
    }
}