@include('frontend.include.header')

<div class="">
    @include('frontend.include.menu')

    @yield('front-main-content')

    @include('frontend.include.footer')
    @include('frontend.include.footer_links')



    <script>
        // Allow the default context menu to appear
        document.addEventListener("contextmenu", function(event) {
            // Optionally, you can log a message or provide additional instructions
            console.log("Default context menu shown. To open Developer Tools, use F12 or Ctrl+Shift+I.");
        });
    </script>


    {{-- <script>
      document.addEventListener("contextmenu", function(event) {
    event.preventDefault(); // Prevents the default context menu from appearing
    window.open(window.location.href, "_blank"); // Opens the same page in a new tab
});
    </script> --}}
