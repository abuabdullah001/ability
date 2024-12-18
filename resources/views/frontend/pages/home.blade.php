@extends('frontend.masterTemp')
@section('fmenuname')
HOME
@endsection
@section('front-main-content')

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
<style type="text/css">
    .principle {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .carousel-inner,
    img {
        height: 0px;
    }

    .principle h2 {
        color: navy;
    }

    .principle img {
        width: 200px;
    }

    .principle h3 {
        background: navy;
        color: #ffff;
        display: block;
        padding: 5px 0px;
    }

    .principle h6 {
        font-size: 18px
    }

    @media only screen and (max-width: 400px) {
        .videoedit {
            margin: -55px
        }

        .imagegallery {
            width: 375px;
            margin: -38px;
            margin-bottom: 50px;
        }
    }

    .gallery-image {
        width: 100%;
        /* Set the desired width */
        height: auto;
        /* Maintain aspect ratio */
        max-height: 250px;
        /* Set the maximum height if needed */
    }

    /* ------------------------------------------------------ */


    .title {
        width: 100%;
        max-width: 854px;
        margin: 0 auto;
    }

    .caption {
        width: 100%;
        max-width: 854px;
        margin: 0 auto;
        padding: 20px 0;
    }

    .vid-main-wrapper {
        width: 100%;
        /* max-width: 1100px; */
        min-width: 440px;
        background: #fff;
        margin: 0 auto;
    }

    /*  VIDEO PLAYER CONTAINER
     ############################### */
    .vid-container {
        position: relative;
        /* padding-bottom: 52%; */
        padding-top: 30px;
        height: 0;
        width: 70%;
        float: left;
    }

    .vid-container iframe,
    .vid-container object,
    .vid-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        min-height: 360px;
    }

    /*  VIDEOS PLAYLIST
     ############################### */
    .vid-list-container {
        width: 29%;
        height: 360px;
        overflow: hidden;
        float: right;
    }

    .vid-list-container:hover,
    .vid-list-container:focus {
        overflow-y: auto;
    }

    ol#vid-list {
        margin: 0;
        padding: 0;
        background: #222;
    }

    ol#vid-list li {
        list-style: none;
    }

    ol#vid-list li a {
        text-decoration: none;
        background-color: #222;
        height: 55px;
        display: block;
        padding: 10px;
    }

    ol#vid-list li a:hover {
        background-color: #666666;
    }

    .vid-thumb {
        float: left;
        margin-right: 8px;
    }

    .active-vid {
        background: #3a3a3a;
    }

    #vid-list .desc {
        color: #cacaca;
        font-size: 13px;
        margin-top: 5px;
    }

    @media (max-width: 624px) {
        body {
            margin: 15px;
        }

        .caption {
            margin-top: 40px;
        }

        .vid-list-container {
            padding-bottom: 20px;
        }
    }

    .g-photo:hover {
        transform: scale(1.1);
        transition: transform 0.9s ease;
    }
    @media (max-width: 624px) {
    body {
        margin: 0px;
    }}
    @media (max-width: 767px) {
        .vid-main-wrapper {
display: flex;
flex-direction: column;
  }
  .vid-list-container{
    margin-top:350px;
  }

  }
</style>

<div class="clearfix "></div>

@include('frontend.include.slider')
{{-- @include('frontend\pages\about') --}}

{{--message--}}
<link rel="stylesheet" href="css/darkscroll.css">
<br>
<div class="container">
    <div class="row sakib " style="margin-right: 5px;">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="simple-tab">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="work-process">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    Chairman Message
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="work-process">
                            <div class="panel-body pbody" style="border : 1px solid navy ; min-height:300px;">
                                <em>"Embracing diversity is our guiding principle, and in our pursuit of excellence, let us not forget the extraordinary strength and resilience embodied by children with disabilities. Together, let's create an inclusive environment where every child, regardless of ability, thrives and reaches their full potential. Our commitment is unwavering—empowering every child, every step of the way."</em><br>
                                <b>Chairman (AFDF)
                                    <br>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="accordian-style-three">
                <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title noticeButton">
                                <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#service-One"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Notice
                                </a>
                            </h4>
                        </div>
                        @foreach ($notice as $notice)
                        <div id="service-One" class="panel-collapse collapse noticeContant" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body noticetext" style="">
                                <h4 class="text-center"> {{$notice->title}}</h4>
                                <p> {!! $notice->descriptino !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="simple-tab">
                <div class="panel-group" id="accordionR" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="work-process">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordionR" href="#collapseROne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    CEO Message
                                </a>
                            </h4>
                        </div>
                        <div id="collapseROne" class="panel-collapse collapse " role="tabpanel"
                            aria-labelledby="work-process">
                            <div class="panel-body" style="border:1px solid #393A3C; min-height:316px;">
                                <em>chairman message - The Organization for Disaster Management Society is devoted to saving lives, strengthening communities, and increasing disaster resilience. We think that preparation and collaboration may turn vulnerability into strength, providing at-risk groups with the resources they need to prepare and recover. Our aim is for a future in which communities thrive, ecosystems are protected, and calamities are successfully managed.
                                    Join us in developing a resilient and inclusive future through compassion, creativity, and action.</em><br><br>
                                <!--<b>Md. Aktaruzzaman Hero<br>-->
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .img {
        height: 40px;
    }
    /* General Styling Adjustments for Mobile */
@media (max-width: 768px) {
    .gallery{
        display: flex;
        flex-direction: column;
    }
    .sakib{
        display: none;
    }
    .vid-list-container{
width:300px;
overflow-y: auto;
   }

    ol#vid-list li a {
    text-decoration: none;
    background-color: #222;
    display: flex;
gap:10px;
margin-top: 10px;
   }
   .section {
    padding: 0px 0 0px;
}

}
</style>


{{-- About odms --}}

<section class="" style="background-color: #f0f0f0">
<div class="container">
  <div style="margin-top:50px " class="">
    <div class="row col-md-6" style="margin-top: 150px;">
     <img style="width: 500px;height:400px" src="images/c83b6c16-62b3-43d3-ab6c-a88872fec5eb.jpeg" alt="">
    </div>
    <div class="row col-md-6">
      <h1> About ODMS </h1>
      <p style="text-size:12px;color:black;text-align: justify;" class="">About Us
        Welcome to ODMS (Organization for Disaster Management Society) a dedicated organization committed to enhancing disaster management and resilience in coastal communities. Established in 2015, our mission is to empower at-risk populations through disaster preparedness, response, and recovery initiatives.
        Our organization addresses the specific challenges that coastal regions face, which are frequently affected by natural disasters such as tropical cyclones, floods, environmental pollution, and sea level rise. We believe that effective disaster management starts with education and active community participation. Therefore, we collaborate with local communities to create customized strategies that not only tackle immediate dangers but also foster long-term sustainability.

<hr>

        At ODMS, we prioritize
Coastal disaster resilience: developing community-based strategies to mitigate the impact of natural disasters in coastal areas. Implementing pre and post strategies and techniques to ensure the protection, safety and sustainability of vulnerable population.
Environment and climate protection: Through innovative and smart solutions, protect the pollution and make the changes accustomed and sustainable to create the environment clean & green which ultimately impact positively to climate.
Zero net carbon: Drawing inspiration from the visionary ideas of Nobel laureate professor Muhammad Yunus, we are devoted to achieve zero net carbon emissions through the advancement of social business model and inclusive initiatives with the aim of safeguarding a sustainable and green planet for generations to come.

Join us in our mission to build safer, more resilient coastal areas & communities. Together, we can make a difference in the face of adversity. Your support is crucial to us achieve our goals and empower those who need it most.

      </p>

    </div>
</div>
</div>
</section>

{{-- Featured event --}}
<style>
    .event-item {
        margin-bottom: 20px;
        text-align: center;
    }

    .event-item img {
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 100%;
        height: auto;
    }

    .event-item h2 {
        margin-top: 10px;
        font-size: 1.5em;
        color: #333;
    }

    .event-item p {
        color: #555;
        font-size: 1em;
        margin-top: 5px;
    }
    </style>

@php
$events = App\Models\Event::take(3)->get();
@endphp
<section class="brows-job-category">
   <div class="container" style="width: 1154px">
       <h1 class="" style="margin-left: 340px;margin-bottom:50px;">Featured Event</h1>

       <div class="ibox">
           <div class="i-body">
               <div class="row">
                   <div class="col-md-12">
                       <div class="row">
                           @foreach($events as $project)
                           <div class="col-md-4 col-sm-6 mb-4"> <!-- col-md-4 ensures 3 cards per row -->
                               <div class="card" >
                                   <a href="{{ route('event.show', ['slug' => $project->slug]) }}">
                                       <img src="{{ asset($project->image)}}" style="width:35rem;height: 23rem;" class="card-img-top img-responsive" alt="...">
                                       <div class="card-body">
                                           <h2 class="card-title">
                                               {{ Str::limit($project->name, 30, '...') }} <!-- Limit the title to 30 characters -->
                                           </h2>
                                           <a href="{{ route('event.show', ['slug' => $project->slug]) }}" class="btn btn-link" style="color:blue">
                                               Read More
                                           </a>
                                       </div>
                                   </a>
                               </div>
                           </div>
                           @endforeach
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>

{{-- Featured event end--}}


{{-- current and all Event --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Fullscreen Background */
    .current_background {
      position: relative;
      height: 100vh;
      width: 100%;
      overflow: hidden; /* Ensures the background doesn't spill out */
    }



    .current_background::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image:
        linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0)),
        url("https://i.ibb.co/drWry8K/image.png");
      background-size: cover;
      background-position: center;
      filter: blur(4px);
      z-index: 1;
    }

    /* Swiper Container */
    .swiper {
      width: 90%;
      height: 400px;
      margin: auto;
      margin-top: 50px;
    }

    /* Swiper slide */
    .swiper-slide {
        padding:60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-align: center;
      font-size: 20px;
      color: #333;


    }
    .swiper-slide img{
        width: 400px;
        height: 40px;
    }


   #nav1{
position:absolute;
z-index: 20;
top: 20px;
width:20px;
right:92%
   }
   #nav2{
position:absolute;
z-index: 20;
top: 20px;
width:20px;
   }
   .card-text{
    color: black;
    width: 70%;
    margin: auto;
    padding-top: 10 0 10 0px;

   }
  </style>

<!-- Slider -->
<h1 style="color:black;margin-left:600px;" >   Current Event  </h1>
<section class="current_background">

    <div class="swiper mySwiper" >

      <div class="swiper-wrapper">
        <!-- Slides -->

        <div class="swiper-slide">

            <div class="card" style="width:50%;padding:10px">
                <img src="images/bangladesh-flooding-aerial.jpg" class="card-img-top" alt="..." style="height:300px">
                <div class="card-body">
                    <h1>lorem ipsum</h1>
                  <p class="card-text text-justify-center" style="color: #222">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button>lerarn more</button>
                </div>
              </div>
    <!-- card-2 -->
    <div class="card" style="width:50%;padding:10">
    <img src="images/1732169911-Amphan-Effected-1.jpg" class="card-img-top" alt="..." style="height:300px">
    <div class="card-body">
        <h1>lorem ipsum</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button>lerarn more</button>
    </div>
    </div>
            </div>
            <div class="swiper-slide">
                <div class="card" style="width:50%;padding:10">
                    <img src="images/1732167248-2019-09-Hurricane-Dorian-scaled.jpg" class="card-img-top" alt="..." style="height:300px">
                    <div class="card-body">
                        <h1>lorem ipsum</h1>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button>lerarn more</button>
                    </div>
                </div>
    <!-- card-2 -->
    <div class="card" style="width:50%;padding:10">
        <img src="images/bangladesh-flooding-aerial.jpg" class="card-img-top" alt="..." style="height:300px">
        <div class="card-body">
            <h1>lorem ipsum</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button>lerarn more</button>
        </div>
    </div>
            </div>
            <div class="swiper-slide">
                <div class="card" style="width:50%;padding:10">
                    <img src="images/rajshahi_cold_jan10-05 (1).jpg" class="card-img-top" alt="..." style="height:300px">
                    <div class="card-body">
                        <h1>lorem ipsum</h1>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button>lerarn more</button>
                    </div>
                </div>
    <!-- card-2 -->
    <div class="card" style="width:50%;padding:10">
        <img src="images/bangladesh-flooding-aerial.jpg" class="card-img-top" alt="..." style="height:300px">
        <div class="card-body">
            <h1>lorem ipsum</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button>lerarn more</button>
        </div>
    </div>
            </div>


        </div>

        <!-- Navigation buttons -->
        <div id="nav1" class="swiper-button-next"></div>
        <div id="nav2" class="swiper-button-prev"></div>

        </div>
    <!-- bg and the viewAll button -->
        <div class="second_part">

        </div>

  <h1>See all event</h1>

  </section>



{{-- Expertt Feedback  --}}

@php
 $feedbacks=App\Models\Feedback::take(4)->get();
@endphp


<style>
    /* Add hover effect for the card */
    .hover-card {
        background-color: #F0F4F5;
        position: relative; /* To allow absolute positioning of text */
        height: 600px;
        margin: 10px 0;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth zoom & shadow */
    }

    .hover-card:hover {
        transform: scale(1.05); /* Slightly enlarge the card */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add a shadow effect */
    }

    /* Image styling */
    .hover-card img {
        height: 100%;
        width: 100%;
        object-fit: cover; /* Ensure the image fits nicely */
        transition: opacity 0.3s ease;
    }

    /* Title (h1) at the top of the image */
    .hover-card h1 {
        position: absolute;
        top: 10px;
        left: 10px;
        color: white;
        z-index: 1;
        margin: 0;
        padding: 5px 10px;
        background: rgba(0, 0, 0, 0.5); /* Dark background to enhance readability */
        border-radius: 5px;
        font-size: 1.5rem;
    }

    /* Sub-title (h3) below h1 */
    .hover-card h3 {
        position: absolute;
        top: 50px;
        left: 10px;
        color: white;
        z-index: 1;
        margin: 0;
        padding: 5px 10px;
        background: rgba(0, 0, 0, 0.5); /* Dark background to enhance readability */
        border-radius: 5px;
        font-size: 1.2rem;
    }

    /* Paragraph (p) at the bottom of the image */
    .hover-card p {
        position: absolute;
        bottom: 10px;
        left: 10px;
        color: white;
        z-index: 1;
        margin: 0;
        padding: 10px;
        background: rgba(0, 0, 0, 0.5); /* Dark background to enhance readability */
        border-radius: 5px;
        font-size: 1rem;
        max-width: 90%; /* Ensure the text doesn't overflow */
    }

    h1.section-title {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
    }

    /* Optional: Fix for Bootstrap grid spacing */
    .col-md-3 {
        padding: 0 10px;
    }
</style>

<section>
    <h1 class="section-title">Expert Feedback</h1>

    @foreach ($feedbacks as $feedback)
    <div class="container">

        <div class="row">

            <!-- First Card -->
            <div class="col-md-3">
                <div class="hover-card">
                    <img src="{{ asset('images/post/' . $feedback->image) }}" alt="Feedback Image">
                    <h1>{{$feedback->name}}</h1>
                    <h3>{{$feedback->designation}}</h3>
                    <p>
                        {!! $feedback->description !!}
                    </p>

                </div>
            </div>

            @endforeach

             </div>
   </div>
</section>




{{-- video  --}}
<div class="clearfix"></div>
<section id="testimonial">
    <div class="container spidochetube" id="youtube">
        <div class="container-fluid pb-video-container">
            <div class="col-md- ">
                <h3 class="text-center">ODMS Video</h3><br>
                <div id="gallery" style="">
                    <div class="container-fluid pb-video-container html5gallery" data-skin="darkness" data-width="480"
                        data-height="272">
                        <div class="vid-main-wrapper clearfix">
                            <!-- THE YOUTUBE PLAYER -->
                            <div class="vid-container">
                                <iframe id="vid_frame" src="{{ $video[0]->video ?? '' }}" frameborder="0" width="560"
                                    height="315"></iframe>
                            </div>

                            <!-- THE PLAYLIST -->
                            <div class="vid-list-container">
                                <ol id="vid-list">
                                    @foreach ($video as $item)
                                    <li>
                                        <a href="javascript:void(0);" onclick="document.getElementById('vid_frame').src='{{ $item->video }}'">
                                            <span class="vid-thumb">
                                                <img class="img" width="72" height="40" src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}">
                                            </span>
                                            <div class="desc">{{ Str::limit($item->title, 30, '...') }}</div>
                                            <!-- Limit text to 30 characters -->
                                        </a>
                                    </li>

                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center mt-3" style="margin-top: 100px">ODMS Gallery</h3><br>
                    <div class="i-box">
                        <div class="i-head">
                            <div class="i-body">
                                <div class="row">
                                    @foreach ($image as $image)
                                    <div class="col-md-3" style="padding: 5px">
                                        <div class="card">
                                            <div class="card-body g-photo" style="padding: 0">
                                                <img src="{{ asset('/uploads/gallery/' . $image->images) }}"
                                                    style="width: 100%;  height: 300px;"
                                                    class="img-thumbnail" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ 'All-Gallery' }}" style="margin-top: 20px;"
                        class="btn btn-success col-md-2 col-md-offset-5 col-sm-12 col-xm-12">See More Gallery</a>
                </div>
            </div>
</section>






{{-- all partner logo --}}

<style>
    .swiper-slide img {
        height: 150px;
        display: inline-block;
    }
</style>

<section>

    <div class="container">
        <h1 style="margin-left: 400px">Our partners</h1>
        <div class="swipers">
            <div class="swiper-wrapper">
                <!-- Images -->
                <div class="swiper-slide"><img src="images/Picture1.png" alt="Apple Logo"></div>
                <div class="swiper-slide"><img src="images/Picture2.png" alt="FedEx Logo"></div>
                <div class="swiper-slide"><img src="images/Picture3.png" alt="Download"></div>
                <div class="swiper-slide"><img src="images/Picture4.png" alt="Logo"></div>

            </div>

            <!-- Swiper navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Swiper pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>



{{-- memeber --}}

<section style="background-color: #F0F0F0;">
    <div class="container">
        <div class="col-md-4">
            <h1>125687</h1>
           <h4>Volunters member</h4>
        </div>
        <div class="col-md-4">
            <h1>10 millon</h1>
            <h4>Individuals Impacted as of 8.31.24</h4>
        </div>
        <div class="col-md-4">
           <h1>420</h1>
           <h4>Communities Served as of 8.31.24</h4>
        </div>
    </div>
</section>




{{-- js part start --}}



{{-- current event js  start --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper', {
        slidesPerView: 2, // Show 2 slides at a time
        spaceBetween: 10, // Smaller space between slides
        loop: false, // Disable looping as you only have 2 slides
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

{{-- current event js  end --}}

<script>
    $(document).ready(function() {
        $(".vid-item").each(function(index) {
            $(this).on("click", function() {
                var current_index = index + 1;
                $(".vid-item .thumb").removeClass("active");
                $(".vid-item:nth-child(" + current_index + ") .thumb").addClass("active");
            });
        });
    });
</script>


{{-- logo js start --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swipers = new Swiper('.swipers', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    });
</script>


{{-- logo js end --}}

<!-- swiper script -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      // Enable navigation buttons
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      // Enable autoplay

      loop: false, // Infinite loop for better UX
    });
  </script>


@endsection




