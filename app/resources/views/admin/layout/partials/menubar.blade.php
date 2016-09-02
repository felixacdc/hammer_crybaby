<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-item @yield('inicioMenu', 'default')">
              <a href="{{ url('/administrator') }}" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Inicio</span>
              </a>
            </li>
            @yield('menuOptions')
          </ul>
        </div>
      </div>
    </div>
  </div>
