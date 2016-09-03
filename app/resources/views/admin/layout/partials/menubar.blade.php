<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-item @yield('inicioMenu', 'default')">
              <a href="{{ url('/admin') }}" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Inicio</span>
              </a>
            </li>
            <li class="site-menu-item @yield('localsMenu', 'default')">
              <a href="{{ url('/admin/locals') }}" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Locales</span>
              </a>
            </li>
            <li class="site-menu-item @yield('newsMenu', 'default')">
              <a href="{{ url('/admin/news') }}" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Noticias</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
