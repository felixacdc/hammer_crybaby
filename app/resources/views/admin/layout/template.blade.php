@include('admin.layout.partials.head')
<body>
    <div id="element" class="introLoading"></div>
    @include('admin.layout.partials.nav')
    @include('admin.layout.partials.menubar')

    @yield('content')

    @include('admin.layout.partials.footer')

    @include('admin.layout.partials.scripts')

    @yield('scripts')
</body>
</html>
