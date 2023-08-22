<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*' , 'dashboard/post_news*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text" class="align-text-bottom"></span>
               My Posts
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/store*') ? 'active' : '' }}" href="/dashboard/store">
              <span data-feather="file-text" class="align-text-bottom"></span>
               Store
            </a>
          </li>
        </ul>

        @can('is_admin')

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span></span>
        </h6>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="grid" class="align-text-bottom"></span>
               Posts Publikasi
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/news*') ? 'active' : '' }}" href="/dashboard/news">
              <span data-feather="grid" class="align-text-bottom"></span>
               Posts News
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/tags*') ? 'active' : '' }}" href="/dashboard/tags">
              <span data-feather="grid" class="align-text-bottom"></span>
               Posts Tags
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Utility</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/tentang*') ? 'active' : '' }}" href="/dashboard/tentang">
              <span data-feather="settings" class="align-text-bottom"></span>
               Tentang Kami
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/visi*') ? 'active' : '' }}" href="/dashboard/visi">
              <span data-feather="settings" class="align-text-bottom"></span>
               Visi & Misi
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/kirim*') ? 'active' : '' }}" href="/dashboard/kirim">
              <span data-feather="settings" class="align-text-bottom"></span>
               Kirim Tulisan
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/konsultasi*') ? 'active' : '' }}" href="/dashboard/konsultasi">
              <span data-feather="settings" class="align-text-bottom"></span>
               Konsultasi Hukum
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/tanya*') ? 'active' : '' }}" href="/dashboard/tanya">
              <span data-feather="settings" class="align-text-bottom"></span>
               Tanya Hukum
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/contact*') ? 'active' : '' }}" href="/dashboard/contact">
              <span data-feather="settings" class="align-text-bottom"></span>
               Contact
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/sosmed*') ? 'active' : '' }}" href="/dashboard/sosmed">
              <span data-feather="settings" class="align-text-bottom"></span>
               Sosmed
            </a>
          </li>
        </ul>
        @endcan
      </div>

      
</nav>