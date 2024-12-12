@extends('frontend.masterTemp')

@section('fmenuname')
HOME
@endsection

@section('front-main-content')
<div class="clearfix"></div>


{{-- Blog --}}

@php
    $blogs=App\Models\Blog::all();
@endphp

<style>

</style>


<section style="background-color: rgb(255, 255, 255);">

    <div class="container" style="margin-top: ;">
        <h1 style="margin-left: 300px; margin-top:0px;margin-bottom:30px">BLOG</h1>


        <div class="col-md-8" style="padding: 20px">

            <img src="{{ asset('images/post/' . $blog->image) }}" style="height: 400px; width: 100%;" alt="Blog Image">

                <div class="row" style="padding: 15px">
                <p style="float:left;">{{$blog->name}}</p>
                <p style="float: right">{{$blog->date}}</p>
                </div>
                <h1>{{ Str::limit(str_replace('<p>', '', str_replace('</p>', '', $blog->title ?? 'Default Title')), 100) }}</h1>
                <p>{{ Str::limit(str_replace('<p>', '', str_replace('</p>', '', $blog->description ?? 'Default Description')), 1000) }}</p>
        </div>
      </div>
</section>





@endsection
