@include('page.template.partials.head')
<body>
    <div id="element" class="introLoading"></div>
    @include('page.template.partials.nav')

    @yield('content')

    @include('page.template.partials.footer')

    @include('page.template.partials.scripts')

</body>
</html>