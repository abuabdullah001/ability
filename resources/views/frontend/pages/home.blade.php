@extends('frontend.masterTemp')
@section('fmenuname')
HOME
@endsection
@section('front-main-content')

<style type="text/css">

#accordion .panel-heading > .panel-title > a {
    background:black;
}

    .principle {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .carousel-inner,
    img {
        height: 0px;
    }

    .principle h2 {
        color: black;
    }

    .principle img {
        width: 200px;
    }

    .principle h3 {
        background: black;
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
  .card-body a.dld{
    color: #222 !important;
    background-color:white;
    width: 150px;
    border-radius:2px;
    margin: auto;
    padding: 10px 15px;
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
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="work-process">
                            <div class="panel-body pbody" style="border: 1px solid black; max-height: 500px;">
                                @php
                                    $content = "chairman message - Welcome to The Organization of Disaster Management Society (ODMS). Since its establishment in 2015, ODMS gained high popularity as
                                                a dedicated organization committed to enhance disaster management and resilience in coastal communities. It has proved dedication empowering at-risk populations
                                                through disaster preparedness, response, and recovery initiatives. From the very beginning ODMS is hardly trying to promote sustainability and build resilience against
                                                disasters. The major ODMS events, such as disaster risk reduction programs, poster presentations, and sessions on planetary science in collaboration with esteemed government and non-government institutions.";
                                    $shortContent = Str::limit($content, 300); // Show only 300 characters initially
                                @endphp
                                <em>
                                    {{ $shortContent }}...
                                </em>
                                <br>

                                @php
                                $odms=App\Models\Odms::first();
                                @endphp

                                @if(strlen($content) > 300)
                                   <a href="{{ route('frontend.pages.odms.show', ['id' => $odms->id]) }}"> <button class="btn btn-success">Read More</button> </a>
                                @endif

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
                                    aria-expanded="true" aria-controls="collapseROne">
                                    CEO Message
                                </a>
                            </h4>
                        </div>

                         <!-- Collapsible Content -->
                         <div id="collapseROne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="work-process">
                            <div class="panel-body" style="border:1px solid #393A3C; max-height:316px;">
                                <em id="ceoMessage">
                                    CEO message - The Organization for Disaster Management Society is devoted to saving lives, strengthening communities, and increasing disaster resilience. We think that preparation and collaboration may turn vulnerability into strength, providing at-risk groups with the resources they need to prepare and recover...
                                </em>
                                <br><br>
                                <button class="btn btn-success">Read more</button>
                            </div>
                        </div>

                        <!-- JavaScript to Limit Text to 300 Characters -->
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                var message = document.getElementById('ceoMessage');
                                if (message.innerHTML.length > 300) {
                                    message.innerHTML = message.innerHTML.substring(0, 300) + "...";
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<style>
    #accordion3 .panel-heading > .panel-title > a {
    background: black;
    }
    #accordionR .panel-heading>.panel-title>a {
     background: black;
    }
    .img {
        height: 40px;
    }
    h1,h2,h3,h4,h5,h6,p, .btn, li{
        font-style: normal;
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
.para-16{
    font-size: 16px!important;
    line-height: 1.8!important;
}
</style>





{{-- About odms --}}

@php
    $odmss=App\Models\Odms::all();
@endphp

<section style="background-color: #f0f0f0">
    <div class="container">
      <div style="margin-top:50px">
        <h2 style="text-align: center; padding-top: 0px;">
          <span style="font-weight:700">About ODMS</span>
        </h2>
        <div style="height: 2px; width:150px; background-color:black; margin:auto; margin-bottom:60px"></div>

        @foreach ($odmss as $odms)
        <div class="row">
          <div class="col-md-6" style="margin-top: 10px;">
            <img style="width: 500px; height:400px" src="{{ asset('images/post/' . $odms->image) }}" alt="">
          </div>
          <div class="col-md-6" style="margin-top: 0px">
            <p class="para-16" style="font-size: 16px!important; color: #555!important; line-height: 1.8!important;" class="mt-3">
              {!! Str::limit($odms->descrition, 1000) !!}
            </p>
            <button class="btn btn-success">Read more</button>
          </div>
        </div>
        @endforeach
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
$events = App\Models\Event::take(3)->where('type','featured')->get();
@endphp
<section class="brows-job-category" style="padding-top: 20px">
    <style>
        .brows-job-category h2 {
            color: black;
            font-size: 35px;
        }
    </style>
 <div class="container mt-5">
    <div class="text-center mb-4">
        <h2 style="font-weight: bold; color: #333;padding-top:60px">Featured Event</h2>
        <div class="" style="height: 2px;width:150px;background-color:black; margin:auto">
        </div>
    </div>
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-body px-4 py-5 bg-light">
            <p class="text-lg text-gray-700 leading-relaxed text-align-center font-serif py-3" style="margin-top: 50px;margin-bottom:50px;font-size: 16px; color: #555; line-height: 1.8;" >
                <strong>Featured Event</strong> in disaster management focuses on critical initiatives like
                <em>emergency response planning</em>, resilience building, or recovery efforts. It highlights key discussions, training,
                or innovations in disaster preparedness. Such events aim to raise awareness, foster collaboration, and improve community
                resilience against disasters.
            </p>
        </div>
    </div>

</div>

   <div class="container" style="width: 1154px">
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
                                           <p style="color:black">{{ Str::limit(strip_tags($project->desc), 100, '...') }}</p>
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
$events = App\Models\Event::take(3)->where('type','current')->get();
@endphp<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Fullscreen Background */
    .current_background {
      position: relative;
      height: 140vh;
      width: 100%;
      overflow: hidden; /* Ensures the background doesn't spill out */
      z-index: 1;
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
      z-index: -1;
      margin-left: 0px;
      margin-right: 0px;
      height: auto;
    }

    /* Swiper Container */
    .swiper {
      width: 90%;
      height: 600px;
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




<section class="current_background bg-black" >
    <div class="container">

        <div class="container mt-5" >
            <div class="text-center mb-4">
                <h2 style="color: #333;font-weight:bold;margin-top:50px;">Current Event</h2>
                <div class="" style="height: 2px;width:150px;background-color:black; margin:auto; margin-bottom:50px">
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <p style="font-size: 16px; color: #555; line-height: 1.8;">
                        In January 2025, Bangladesh is addressing several disaster management challenges. The government has
                        closed its border with Myanmar, preventing Rohingya refugees from seeking safety amid escalating
                        violence in Rakhine state.

                    </p>
                    <p style="font-size: 16px; color: #555; line-height: 1.8;">
                        Additionally, the World Bank has pledged over $2 billion to support Bangladesh's flood response
                        initiatives and other reforms.

                    </p>
                    <p style="font-size: 16px; color: #555; line-height: 1.8;margin-bottom:50px">
                        Furthermore, the European Investment Bank plans to double its funding to €2 billion to aid in
                        infrastructure projects focused on climate change resilience.
                    </p>
                </div>
            </div>
        </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($events as $event)
            <!-- Each card becomes a slide -->
            <div class="swiper-slide">
                <div class="card" style="width: 90%; padding: 10px; margin: auto;">
                    <a href="{{ route('event.show', ['slug' => $event->slug]) }}">
                        <img src="{{ $event->image ? asset($event->image) : asset('images/default.jpg') }}"
                             class="card-img-top mb-2"
                             alt="{{ $event->title }}"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body " style="height: 1000px !important">
                            <h2 class="card-title" style="color: black">
                                {{ Str::limit($event->name, 30, '...') }}
                            </h2>
                            <p style="color:black">{{ Str::limit(strip_tags($event->desc), 100, '...') }}</p>


                           <a href="{{ route('event.show', ['slug' => $event->slug]) }}" class="dld" style="color:white;display:block;margin-top:20px">
                                Read More
                            </a>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Navigation buttons -->
        <style>
            .swiper-button-next,.swiper-button-prev{
             margin-top: -120px;
             color: black;
            }
        </style>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Background and View All Button -->
    {{-- <hr><button class="btn btn-success">
    <h1 style="background-color: black;">
        <a href="/event" style="color: white; text-decoration: none;">See All Events</a>
    </h1></button> --}}
</div>
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

<section style="background-color:#F0F0F0; " >
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="section-title" style="font-weight: bold; color: #333;margin-top:100px">Expert Feedback</h2>
            <div class="" style="height: 2px;width:150px;background-color:black; margin:auto;margin-bottom:50px">
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <p style="font-size: 16px; color: #555; line-height: 1.8; text-align: justify;">
                    Experts commend Bangladesh's disaster management for significantly reducing fatalities from natural
                    disasters, attributing this to comprehensive policies like the Standing Order on Disaster and the
                    Disaster Management Act.

                </p>
                <p style="font-size: 16px; color: #555; line-height: 1.8; text-align: justify;margin-bottom:50px">
                    However, challenges persist, including irregular disaster management committee meetings, bureaucratic
                    hurdles, and corruption, which hinder effective policy implementation.

                </p>
            </div>
        </div>
    </div>


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
<section id="testimonial" style="padding-top: 70px">
    <div class="container spidochetube" id="youtube">
        <div class="container-fluid pb-video-container">
            <div class="col-md- ">
                <div class="container mt-5">
                    <div class="text-center mb-4">
                        <h2 style="font-weight: bold; color: #333;"> Video Gallery</h2>
                        <div class="" style="height: 2px;width:150px;background-color:black; margin:auto;margin-bottom:50px">
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p style="font-size: 16px; color: #555; line-height: 1.8; text-align: justify;margin-bottom:50px">
                                Disaster Management and Support involves planning, coordination, and response to natural or man-made disasters. It includes
                                 preparedness, emergency response, recovery, and risk reduction efforts to minimize damage and protect communities. Effective
                                 disaster management relies on early warning systems, resource mobilization, humanitarian aid, and collaboration between
                                  governments, NGOs, and volunteers.
                            </p>
                        </div>
                    </div>
                </div>
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
                </section>


                    <section style="background-color: #f0f0f0; padding-bottom:200px;margin-left:20px">
                    <div class="container mt-5">
                        <div class="text-center mb-4">
                            <h2 style="font-weight: bold; color: #333;margin-top:100px">Photo Gallery</h2>
                            <div class="" style="height: 2px;width:150px;background-color:black; margin:auto;margin-bottom:50px">
                            </div>
                        </div>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <p style="font-size: 16px; color: #555; line-height: 1.8; text-align: justify;margin-bottom:50px">
                                    Technology plays a vital role in disaster management by improving early warning systems, communication, and response efficiency.
                                     Satellite imaging, artificial intelligence, and data analytics help predict disasters and assess damage. Mobile apps and social
                                     media platforms enable real-time information sharing, ensuring swift emergency response. Drones, GIS mapping,
                                     and remote sensing aid in rescue operations, making disaster management more effective, coordinated, and life-saving.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- <h2 class="text-center mt-3" style="margin-top: 100px">ODMS Gallery</h2><br> --}}
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


<section style="padding-top:60px ">

    <div class="container">
        <div class="container mt-5">
            <div class="text-center mb-4">
                <h2 style="font-weight: bold; color: #333;">Our Partners</h2>
                <div class="" style="height: 2px;width:150px;background-color:black; margin:auto;margin-bottom:50px">
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <p style="font-size: 16px; color: #555; line-height: 1.8; text-align: justify;margin-bottom:50px;">
                        Effective disaster management relies on collaboration between governments, NGOs, international organizations, and local
                         communities. Key partners include the United Nations and humanitarian agencies, which provide emergency aid and
                          resources. Private sector involvement enhances technological and logistical support, while community volunteers strengthen
                           on-the-ground response. These partnershipsensure coordinated efforts in disaster preparedness, response, and recovery, minimizing the impact on affected populations.
                    </p>
                </div>
            </div>
        </div>
<style>
    .swiper-slide {
            padding: 0px !important;
            margin-right: 0px !important;
            justify-content: center !important;

        }
</style>


        <div class="swipers " style="text-align: center">
            <div class="swiper-wrapper">
                <!-- Images -->
                <div class="swiper-slide">
                    <img src="images/Picture4.png" alt="Logo" style="height: 100px; width: 150px;">
                </div>
                <div class="swiper-slide">
                    <img src="images/Picture1.png" alt="Apple Logo" style="height: 100px; width: 150px;">
                </div>
                <div class="swiper-slide">
                    <img src="images/Picture2.png" alt="FedEx Logo" style="height: 100px; width: 150px;">
                </div>
                <div class="swiper-slide">
                    <img src="images/Picture3.png" alt="Download" style="height: 100px; width: 150px;">
                </div>
                <div class="swiper-slide">
                    <img src="images/Picture4.png" alt="Logo" style="height: 100px; width: 150px;">
                </div>

                <div class="swiper-slide">
                    <img src="images/Picture4.png" alt="Logo" style="height: 100px; width: 150px;">
                </div>

            </div>

            <!-- Swiper navigation buttons -->
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}

            <!-- Swiper pagination -->

        </div>

    </div>
</section>



{{-- memeber --}}

<section style="background-color: #F0F0F0;padding-top:40px">
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
        const swiper = new Swiper('.swipers', {
            slidesPerView: 4, // Show 4 slides at a time
            spaceBetween: 10, // Space between slides
            loop: true, // Enable infinite looping
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2000, // Autoplay delay (2 seconds)
                disableOnInteraction: false,
            },
        });
    });
    </script>



{{-- logo js end --}}

<!-- swiper script -->

<!-- Include Swiper.js JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


<script>
    const swiper = new Swiper('.mySwiper', {
        loop: false, // Enables continuous loop mode
        navigation:
           false,

        slidesPerView: 2, // Adjust to display more slides per view
        spaceBetween: 10, // Space between slides in px
        breakpoints: {
            640: {
                slidesPerView: 2, // Adjust for medium screens
            },
            768: {
                slidesPerView: 5, // Adjust for medium screens
            },

            1024: {
                slidesPerView: 5, // Adjust for larger screens
            }
        }
    });
        setTimeout(() => {
        swiper.update(); // Ensure Swiper updates after rendering
    }, 100);
</script>



@endsection
