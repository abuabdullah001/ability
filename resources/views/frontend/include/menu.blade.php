<style>
    /* Reset and Basic Styling */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'System UI', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    body {
        background-color: #f0f0f0;
    }



    .navbar {
        position: relative;
        /* min-height: 50px; */
        margin-bottom: 0px;
        border: 1px solid transparent;
        background-color: #ffffff;
        padding: 30px;
    }

    .navbar-container {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    /* Logo Styling */
    .logo {
        color: #ffc000;
        font-size: 24px;
        font-weight: bold;
        display: flex;
        align-items: center;

    }


    .nav-links {
        display: flex;
        gap: 25px;
        /* background-color:white; */
        padding: 10px 20px;
        border-radius: 25px;
        list-style: none;
        margin-right: 356px;
        /* position: sticky; */
        position: sticky;
        top: 0;
        z-index: 100;

    }

    .nav-links li {
        position: relative;

    }

    .nav-links a {
        text-decoration: none;
        /* color: #1d2a3a; */
        color: black;
        font-size: 16px;
        font-weight: 500;
        display: flex;
        align-items: center;

    }

    .nav-links a::after {
        content: '';
        font-size: 12px;
        margin-left: 5px;
        transition: transform 0.3s;
    }

    /* Show arrow for items with submenus */
    .has-submenu>a::after {
        content: '▼';
        /* color: rgb(29, 42, 58); */
        color: white;
        display: inline;
    }

    /* Rotate arrow on hover */
    .nav-item:hover>a::after {
        transform: rotate(180deg);
    }

    .has-submenu>a::after {
        color: black;
    }

    /* Dropdown Menu */
    .dropdown-menu {
        display: none;
        position: absolute;
        padding: 2px;
        margin: 0px;
        color: #393A3C;
    }

    .dropdown-menu .li .a {
        color: black;
    }

    .nav-item:hover .dropdown-menu,
    .dropdown-menu:hover {
        display: block;
        color: black;
    }

    .dropdown-item {
        display: block;
        color: black;
    }

    .dropdown-item:hover {
        background-color: rgb(248, 248, 248);
    }

    ul#navLink.nav-links {
        margin-left: 40px;
    }



    /* Right Side Buttons */
    .nav-buttons {
        display: flex;
        align-items: center;
        gap: 20px;
        /* margin-top: 30px; */
    }


    .nav-buttons {
        z-index: 50;
        /* position: fixed; */
        top: 0px;
        /* Adjust as needed */
        right: 20px;
        /* Adjust as needed */

    }

    .buttonFixed {
        position: fixed;
        display: flex;
        margin-left: 761px;
        margin-top: -6px;
    }



    .input-group .form-control:first-child,
    .input-group-addon:first-child,
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group>.btn,
    .input-group-btn:first-child>.dropdown-toggle,
    .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
    .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: -1px;
        border-bottom-right-radius: -1px;
    }

    .btn-success {
        /* background-color: rgb(17, 183, 25); */
        background-color: #393A3C;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        color: #f2f5f8;
    }

    .input-group {
        margin-left: 15px;
    }

    .form-control {
        height: 38px;
    }

    /* Modal Styling */
    .modal .form-control {
        height: 52px;
        border: 1px solid #d7dfea;
        color: #727272;
        width: 100%;
        margin: 0 auto 12px;
        font-size: 15px;
        border-radius: 120px;
        box-shadow: none;
    }

    @media (min-width: 768px) {

        /* Show Hamburger Icon on Mobile */
        .hamburger {
            display: none;

        }
    }

    @media (min-width: 768px) {
        .navbar {
            border-radius: 0px;
        }
    }

    @media (max-width: 768px) {

        /* Show Hamburger Icon on Mobile */
        .hamburger {
            display: block;
            font-size: 24px;
            cursor: pointer;
            color: #ffc000;
        }

        /* Adjust the nav-links for overlay effect */
        .nav-links {
            display: none;
            flex-direction: column;
            gap: 0;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            border-radius: 0;
            padding: 10px 20px;
            z-index: 10;


        }

        /* Show nav links when toggled */
        .nav-links.active {
            display: flex;
        }

        /* Dropdown styling for mobile */
        .dropdown-menu {
            position: static;
            background-color: #ffffff;
        }

        .nav-buttons {
            display: none;
        }

        @media (max-width: 624px) {
            body {
                margin: 0px;
            }

        }
    }

    .navbar {
        position: relative;
        /* min-height: 50px; */
        margin-bottom: 0px;
        border: 1px solid transparent;
    }

    .modal .form-control {
        height: 52px;
        border: 1px solid #d7dfea;
        color: #727272;
        width: 70%;
        font-size: 15px;
        border-radius: 120px;
        box-shadow: none;
        margin-top: 50px;
    }

    @media (min-width: 768px) {
        .contact-info {
            display: none;
        }
    }
</style>






<nav class="navbar">
    @php
        $footers = App\Models\contactUs::all();
    @endphp
    @foreach ($footers as $footer)
        <div class="contact-info">
            <p class="text-white"><i class="fa-solid fa-square-phone"></i> Phone: {{ $footer->phone }}</p>


        </div>
        <div class="navbar-container" id="topBar">
            <!-- Logo -->
            <div class="logo">
                <a class="" href="{{ url('/') }}">

                    <img style="height: 100px; " class="img-responsive img-fluid navbar-brand"
                        src="{{ URL::to('/') }}/images/2a6585d4-e9d0-40ef-98dd-d3afb105b76e.jpg" alt="">
                </a>
            </div>
    @endforeach
    <div class="hamburger" id="hamburger">&#9776;</div>

    {{-- donate button --}}
    <div class="nav-buttons row">
        {{-- donate button --}}

        <!-- Navigation Links -->
        <ul class="nav-links" id="navLinks">


            <li><a href="{{ url('/') }}">HOME</a></li>

            {{-- About us --}}
            <li class="nav-item has-submenu">

                   <a class="nav-item2" id="aboutus5" href="">
                    About Us
                   </a>
                {{-- <a href="#" class="dropdown-toggle"></a> --}}
                {{-- <ul class="dropdown-menu">
                    @foreach (App\Models\Category::where('type', 'About')->get() as $anoutmenu)
                        <li>
                            <a class="dropdown-item"
                                href="{{ '/view_aboutepage/' . $anoutmenu->id }}">{{ $anoutmenu->title }}</a>
                        </li>
                    @endforeach
                    @foreach (App\Models\Category::where('type', 'Committee')->get() as $committeemenu)
                        <li>
                            <a class="dropdown-item"
                                href="{{ '/view_committeepage/' . $committeemenu->id }}">{{ $committeemenu->title }}</a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ route('report') }}">Report</a>
                    </li>
                </ul> --}}
            </li>


            <li class="nav-item has-submenu">
                {{-- activities --}}
                <a class="nav-item2" id="donateUsButton23" href="">
                     Activities
                </a>
          </li>

          {{-- involved --}}
            <li class="nav-item has-submenu">
                <a class="nav-item233" id="involvedID" href="">
                    Involved
                   </a>
                {{-- <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/volunteer') }}">Join as a Volunteer</a></li>
                    <li><a class="dropdown-item" href="{{ url('/signin') }}">Join as a Donor</a></li>
                </ul> --}}
            </li>

            {{-- media --}}
            <li class="nav-item has-submenu">
                <a class="nav-item233" id="donateUsButton233" href="">
                    Media
                </a>
                {{-- <ul class="dropdown-menu">

                </ul> --}}
            </li>

            <li><a href="{{ url('/Contact-Us') }}">CONTACT</a></li>
                            <div class="buttonFixed d-flex" style="margin-right:20px ">
                                    <a class="nav-item" href="{{ url('/event') }}">
                                    <button class="btn btn-success text-white" id="donateUsButton">
                                       Donate Us
                                    </button>
                                    </a>
                                <li class="nav-item  ">
                                    <a href="{{ Route('sponsor_child') }}">
                                        <button class="btn btn-success text-white ">Sponsor</button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ Route('support.showForm') }}">
                                        <button class="btn btn-success text-white text-bold" style="margin-right: 20px" data-bs-toggle="tooltip"   data-bs-placement="top" title="Ask what you need" id="large-tooltip">
                                            <span style="font-size: 20px">?</span>
                                        </button>
                                    </a>
                                </li>
                            </div>
        </ul>



        <style>
            .event-list {

                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 0px;
                padding: 10px;
                width: 100%;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 10;
            }

            .event-item {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            .event-item2 {
                display: flex;
                justify-content:space-around;
                align-items: center;
                margin-bottom: 10px;

            }
            .aboutus6 {
                display: flex;
                justify-content:space-around;
                align-items: center;
                margin-bottom: 10px;

            }
            .event-item27 {
                display: flex;
                justify-content:space-around;
                align-items: center;
                margin-bottom: 10px;
            }
            .involved33 {
                display: flex;
                justify-content:space-around;
                align-items: center;
                margin-bottom: 10px;
                /* margin-left: 200px;
                margin-right: 200px; */
            }

            .event-item img {
                width: 50px;
                height: 50px;
                object-fit: cover;
                border-radius: 5px;
                margin-right: 0px;
            }

            .event-item span {
                font-size: 14px;
                font-weight: 500;
            }
        </style>


        @php
            // Fetch the first 4 events
            $events = App\Models\Event::take(4)->get();
        @endphp

        <div class="">

{{-- donate us button --}}
      <div id="eventList" class="event-list " style="display: flex; margin-top:0px;margin-left:00px;">
                @foreach ($events as $event)
                    <div class="event-item "
                        style="display: flex; align-items: center; margin-bottom: 10px; width:100%;">
                        <a href="{{ route('event.show', ['slug' => $event->slug]) }}">
                            <img src="{{ asset($event->image) }}"
                                style="width: 300px; height: 150px; object-fit: cover; border-radius: 5px; margin-right: 0px;"
                                class="card-img-top img-responsive" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">
                                    {{ Str::limit($event->name, 30, '...') }}
                                </h2>

                            </div>
                        </a>

                    </div>
                @endforeach
                <div class="block" >
               <h3 ><a href="/event"><button class="btn btn-success" style="margin-top:50px">All event</button> </a></h3>
                </div>
            </div>
        </div>
    </div>

    {{-- about us start --}}
    <div id="aboutus4" class="event-list" style=" margin-top:0px;margin-left:00px;">
        <div class="aboutus6">

                    <div style="display: flex">
                        @foreach (App\Models\Category::where('type', 'About')->get() as $anoutmenu)
                        <a class="dropdown-item"
                         href="{{ '/view_aboutepage/' . $anoutmenu->id }}">
                         <img src="images/event/151.jpg" alt="" style="height: 150px;width:250px;margin-left:10px;">
                          <h4 style="text-align: center">{{ $anoutmenu->title }}</h4>
                        </a>
                        @endforeach
                        @foreach (App\Models\Category::where('type', 'Committee')->get() as $committeemenu)
                            <a class="dropdown-item"
                                href="{{ '/view_committeepage/' . $committeemenu->id }}">
                                <img src="images/event/152.jpeg" alt="" style="height: 150px;width:250px;margin-left:10px;">
                               <h4 style="text-align: center">{{ $committeemenu->title }}</h4>
                            </a>
                        @endforeach
                        <a class="dropdown-item" href="{{ route('report') }}">
                            <img src="images/event/155.jpg" alt="" style="height: 150px;width:250px;margin-left:10px;margin-right:10px;">
                            <h4 style="text-align: center">Report</h4>
                        </a>
                    </div>
        </div>
</div>

{{--about us end --}}

{{-- Acitivities --}}
      <div id="all2222" class="event-list" style=" margin-top:0px;margin-left:00px;">
<div class="event-item2">
    <div>

        <a class="dropdown-item" href="{{ url('/event') }}">
            <img src="images/event/123.jpg" alt="" style="height: 150px;width:300px;">
            <h3 style="text-align: center">Events</h3> </a>
    </div>
    <div>

        <a class="dropdown-item" href="{{ url('/champaign') }}">
            <img src="images/event/124.png" alt="" style="height: 150px;width:300px;">
            <h3 style="text-align: center">Campaign</h3></a>
    </div>
    <div>
        <a class="dropdown-item" href="{{ url('/project') }}">
            <img src="images/event/125.png" alt="" style="height: 150px;width:300px;">
            <h3 style="text-align: center">Projects</h3></a>
    </div>
    <div>
        <a class="dropdown-item" href="/response">
            <img src="images/event/126.png" alt="" style="height: 150px;width:300px;">
            <h3 style="text-align: center">Our Response</h3></a>
    </div>
        </div>
</div>

{{-- activities end --}}


{{-- Media start --}}
    <div id="all23" class="event-list" style=" margin-top:0px;margin-left:00px;">
            <div class="event-item27">
                        <div>
                            <a class="dropdown-item" href="{{ url('/All-Gallery') }}">
                                <img src="images/event/130.jpeg" alt="" style="height: 150px;width:300px;">
                                <h3 style="text-align: center">Gallery</h3> </a>
                        </div>
                        <div>
                            <a class="dropdown-item" href="/All-Video">
                                <img src="images/event/131.png" alt="" style="height: 150px;width:300px;">
                                <h3 style="text-align: center">Video</h3></a>
                        </div>
                        <div>
                            <a class="dropdown-item" href="{{ url('/news') }}">
                                <img src="images/event/132.jpeg" alt="" style="height: 150px;width:300px;">
                                <h3 style="text-align: center">News</h3></a>
                        </div>
                        <div>
                            <a class="dropdown-item" href="{{ route('frontend.pages.blog') }}">
                                <img src="images/event/133.png" alt="" style="height: 150px;width:300px;">
                                <h3 style="text-align: center">Blog</h3></a>
                        </div>
            </div>
    </div>

{{--media end --}}


{{-- Involved start --}}
    <div id="involved3" class="event-list" style=" margin-top:0px;margin-left:00px;">
            <div class="involved33">
                        <div>
                            <a class="dropdown-item" href="{{ url('/volunteer') }}">
                                <img src="images/event/140.jpg" alt="" style="height: 150px;width:500px;">
                                <h3 style="text-align: center">Join as a Volunteer</h3> </a>
                        </div>
                        <div>
                            <a class="dropdown-item" href="{{ url('/signin') }}">
                                <img src="images/event/144.jpg" alt="" style="height: 150px;width:500px;">
                                <h3 style="text-align: center">Join as a Donor</h3></a>
                        </div>
            </div>
    </div>

{{--Involved end --}}



        </div>
    </div>

    </div>
</nav>
<style>
    .input-group-append {
        margin-left: 250px;
    }
</style>
<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-5 ">
                <form action="{{ route('search') }}" method="GET">
                    <div class="p-4">
                        <input type="text" class="form-control" name="query" placeholder="Search..." required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        $('#hamburger').click(function() {
            $('.nav-links').toggleClass('active');
        });

        let timer;

        $('.nav-item.has-submenu').hover(function() {
            clearTimeout(timer);
            $(this).children('.dropdown-menu').stop(true, true).slideDown();
        }, function() {
            timer = setTimeout(() => {
                $(this).children('.dropdown-menu').stop(true, true).slideUp();
            }, 300);
        });
    });
</script>



<script>
    $(document).ready(function() {
        const donateUsButton = $('#donateUsButton');
        const eventList = $('#eventList');


        donateUsButton.hover(
            function() {
                eventList.show();
            },
            function() {

            }
        );
        eventList.hover(
            function() {

            },
            function() {

                eventList.hide();
            }
        );
        donateUsButton.on('click', function(donate) {
            $('html, body').animate({
                scrollTop: $('#allEvents').offset().top
            }, 800); // Smooth scroll to the all events section
        });
    });
</script>

{{-- activities menu --}}
<script>
    $(document).ready(function() {
        const donateUsButton = $('#donateUsButton23');
        const eventList = $('#all2222');

        eventList.hover(
            function() {

            },
            function() {

                eventList.hide();
            }
        );


        donateUsButton.hover(
            function() {
                eventList.show();
            },
            function() {

            }
        );

        donateUsButton.on('click', function(donate) {
            $('html, body').animate({
                scrollTop: $('#allEvents').offset().top
            }, 800); // Smooth scroll to the all events section
        });
    });
</script>

{{-- media menu--}}
<script>
    $(document).ready(function() {
        const donateUsButton = $('#donateUsButton233');
        const eventList = $('#all23');

        eventList.hover(
            function() {

            },
            function() {

                eventList.hide();
            }
        );


        donateUsButton.hover(
            function() {
                eventList.show();
            },
            function() {

            }
        );

        donateUsButton.on('click', function(donate) {
            $('html, body').animate({
                scrollTop: $('#allEvents').offset().top
            }, 800); // Smooth scroll to the all events section
        });
    });
</script>



{{-- volunteer menu--}}
<script>
    $(document).ready(function() {
        const donateUsButton = $('#involvedID');
        const eventList = $('#involved3');

        eventList.hover(
            function() {

            },
            function() {

                eventList.hide();
            }
        );


        donateUsButton.hover(
            function() {
                eventList.show();
            },
            function() {

            }
        );

        donateUsButton.on('click', function(donate) {
            $('html, body').animate({
                scrollTop: $('#allEvents').offset().top
            }, 800); // Smooth scroll to the all events section
        });
    });
</script>

{{-- about us menu--}}
<script>
    $(document).ready(function() {
        const donateUsButton = $('#aboutus5');
        const eventList = $('#aboutus4');

        eventList.hover(
            function() {

            },
            function() {

                eventList.hide();
            }
        );


        donateUsButton.hover(
            function() {
                eventList.show();
            },
            function() {

            }
        );

        donateUsButton.on('click', function(donate) {
            $('html, body').animate({
                scrollTop: $('#allEvents').offset().top
            }, 800); // Smooth scroll to the all events section
        });
    });
</script>



