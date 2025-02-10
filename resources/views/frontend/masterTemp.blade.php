@include('frontend.include.header')

<div class="">
    @include('frontend.include.menu')

    @yield('front-main-content')

    @include('frontend.include.footer')
    @include('frontend.include.footer_links')
    <script>
        document.addEventListener("contextmenu", function(event) {
            event.preventDefault(); // Prevent the default context menu
            window.open(window.location.href, "_blank"); // Open the same page in a new tab
        });
    </script>