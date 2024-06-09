<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mb-2">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">BUMN Muda</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item @active('dashboard')">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons fa-solid fa-house-chimney"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
      <li class="menu-item @active('submission.*')">
        <a href="{{ route('submission.index') }}" class="menu-link">
          <i class="menu-icon tf-icons fa-solid fa-cubes"></i>
          <div data-i18n="Analytics">Manajemen Pendaftar</div>
        </a>
      </li>
      <li class="menu-item @active('donatur.*')">
        <a href="{{ route('donatur.index') }}" class="menu-link">
          <i class="menu-icon tf-icons fa-solid fa-photo-film"></i>
          <div data-i18n="Analytics">Manajemen Donatur</div>
        </a>
      </li>
      <li class="menu-item @active('timeline.*')">
        <a href="{{ route('timeline.index') }}" class="menu-link">
          <i class="menu-icon tf-icons fa-solid fa-pen-to-square"></i>
          <div data-i18n="Analytics">Time Line</div>
        </a>
      </li>
      <li class="menu-item @active('periode.*')">
        <a href="{{ route('periode.index') }}" class="menu-link">
          <i class="menu-icon tf-icons fa-solid fa-list"></i>
          <div data-i18n="Analytics">Periode</div>
        </a>
      </li>

      <li class="menu-item @active('user.*')">
        <a href="{{ route('user.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">User</div>
        </a>
      </li>

      <li class="menu-item @active('report.*')">
        <a href="{{ route('report.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Laporan</div>
        </a>
      </li>

      <li class="menu-item @active('mahasiswa.index')">
        <a href="{{ route('mahasiswa.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard Mahasiswa</div>
        </a>
      </li>
    </ul>
  </aside>