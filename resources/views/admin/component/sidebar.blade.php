<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link " href="{{ route('admin.dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <!-- End Dashboard Nav -->

    <!-- Tables Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav-1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Konten</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav-1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('berita.view') }}">
            <i class="bi bi-circle"></i><span>Data Artikel</span>
          </a>
        </li>
        <li>
          <a href="{{ route('recentpost.view') }}">
            <i class="bi bi-circle"></i><span>Data Postingan</span>
          </a>
        </li>

        
        <li>
          <a href="{{ route('promo.view')}}">
            <i class="bi bi-circle"></i><span>Data Promo</span>
          </a>
        </li>
        <li>
          <a href="{{ route('kegiatan.view')}}">
            <i class="bi bi-circle"></i><span>Data Kegiatan</span>
          </a>
        </li>

      </ul>
    </li>
    <!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav-2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-megaphone"></i><span>Information</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav-2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('about.view') }}">
            <i class="bi bi-circle"></i><span>About</span>
          </a>
        </li>
        <li>
          <a href="{{ route('contact.view') }}">
            <i class="bi bi-circle"></i><span>Pesan Masuk</span>
          </a>
        </li>
        <li>
          <a href="{{ route('team.view') }}">
            <i class="bi bi-circle"></i><span>Team</span>
          </a>
        </li>

      </ul>
    </li>

    <!-- Contact Page Nav -->
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li> --}}
    <!-- End Contact Page Nav -->

    <!-- Log Out Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" type="submit" href="{{ route('admin.logout') }}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Log Out</span>
      </a>
    </li>
    <!-- End Log Out Page Nav -->

  </ul>
  
</aside>
<!-- End Sidebar-->