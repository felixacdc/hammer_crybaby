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
                <i class="site-menu-icon fa fa-building" aria-hidden="true"></i>
                <span class="site-menu-title">Locales</span>
              </a>
            </li>
            <li class="site-menu-item @yield('newsMenu', 'default')">
              <a href="{{ url('/admin/news') }}" data-slug="dashboard">
                <i class="site-menu-icon fa fa-newspaper-o" aria-hidden="true"></i>
                <span class="site-menu-title">Noticias</span>
              </a>
            </li>
            <li class="site-menu-item @yield('inicioMenu', 'default')">
              <a href="{{ url('/admin/categories') }}" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Categorias</span>
              </a>
            </li>
            <li class="site-menu-item @yield('eventsMenu', 'default')">
              <a href="{{ url('/admin/events') }}" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Eventos</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
