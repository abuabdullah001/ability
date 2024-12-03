@extends('frontend.masterTemp')
@section('fmenuname')
HOME
@endsection
@section('front-main-content')
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
        color: #016401;
    }

    .principle img {
        width: 200px;
    }

    .principle h3 {
        background: #016401;
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
                            <div class="panel-body pbody" style="border : 1px solid green ; min-height:300px;">
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
                                <h4 class="text-center">{{$notice->title}}</h4>
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
                                    Executive Member
                                </a>
                            </h4>
                        </div>
                        <div id="collapseROne" class="panel-collapse collapse " role="tabpanel"
                            aria-labelledby="work-process">
                            <div class="panel-body" style="border:1px solid green; min-height:316px;">
                                <em>“We sincerely expect your active support and cooperation in our every step and
                                    initiatives for ameliorating the status of BIEA and expanding indenting business in
                                    the country.”</em><br><br>
                                <!--<b>Md. Aktaruzzaman Hero<br>-->
                                Central Executive Member </b>
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


<section style="background-color: rgb(255, 255, 255);">
    <div class="container" style="margin-top: 30px;">
        <h1 style="margin-left: 470px; margin-bottom:30px;">ODMS</h1>
        <div class="col-md-4">
            <img src="images/1732170023-01-10-8.jpg" style="height: 200px" alt="">
            <h1>Flood</h1>
          <p style="text-align: justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ratione natus id adipisci aspernatur. Eum, a? Odio dicta, enim, harum molestias distinctio libero, exercitationem veniam hic temporibus laboriosam quisquam aut.

          </p>
        </div>
        <div class="col-md-4">
            <img src="images/istockphoto-122719833-612x612.jpg" style="height: 200px" alt="">
            <h1>Drought</h1>
             <p style="text-align: justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ratione natus id adipisci aspernatur. Eum, a? Odio dicta, enim, harum molestias distinctio libero, exercitationem veniam hic temporibus laboriosam quisquam aut.

          </p>
        </div>
        <div class="col-md-4">
            <img src="images/1732169911-Amphan-Effected-1.jpg" style="height: 200px" alt="">
           <h1>Storm</h1>
           <p style="text-align: justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ratione natus id adipisci aspernatur. Eum, a? Odio dicta, enim, harum molestias distinctio libero, exercitationem veniam hic temporibus laboriosam quisquam aut.

          </p>
        </div>

    </div>
</section>



<section class="" style="background-color: #f0f0f0">
<div class="container">
  <div style="margin-top:50px " class="">
    <div class="row col-md-6">
     <img style="width: 500px;height:400px" src="images/news/0_NXiwdgRrkGARqDkU.jpg" alt="">
    </div>
    <div class="row col-md-6">
      <h1> About ODMS </h1>
      <p style="text-size:12px;color:black;text-align: justify;" class="">Disaster Forum (DF) is a Dhaka based National Disaster Preparedness Network of seventy humanitarian and development agencies,
         research institutions, government departments and independent activists who are working on various disaster and environmental issues with special focus on preparedness.
         Since 1994, Forum is working for ensuring the accountability of the humanitarian and development agencies and to promote the rights of all vulnerable people.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A laudantium minus inventore nam, ducimus dolor rerum? Mollitia esse omnis quidem quas. Fugiat, alias qui! Eos laudantium voluptate ea vel delectus.
      </p>
        <ul>
            <li>   <h4>Hospitality</h4> </li>
            <li> <h4>Food</h4>  </li>
              <li>  <h4>Treatment</h4></li>
        </ul>
    </div>
</div>
</div>
</section>

{{-- 
<section>
    <div>

    </div>
    <div>

    </div>
</section> --}}



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
                                        <a href="javascript:void(0);"
                                            onclick="document.getElementById('vid_frame').src='{{ $item->video }}'">
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



{{-- memeber --}}

<section style="background-color: rgb(255, 255, 255);">
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


<img src="{{ asset('images/256-2562832_paypal-buttons-payment-method.png') }}" style="width:100%; height:35rem; object-fit: contain;" class="img-fluid" alt="Payment Banner">

<hr>


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


@endsection
