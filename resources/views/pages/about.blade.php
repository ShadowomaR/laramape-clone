@extends('layout.default',['title'=>'About'])

@section('content')
<div class="container">
    <h1>What is Laracarte ?</h1>
    <p>Laracarte is a clone of <a href="//Laramap.com">Laramap </a></p>
    <div class="row ">
        <div class="col-md-6 ">
            <p class="bg-warning p-1"><Strong><i class="fa fa-exclamation-triangle " aria-hidden="true"></i> This app  has been  built By <a href="">@SHADOW</a> for learning perposes.</Strong></p>
        </div>
    </div>
    <p>Feel free to help to improve the <a href="http://">Source code</a></p>
    <hr>
    <h1>What is Laramap ?</h1>
    <p>Laramap is the website by which was inspire :p</p>
    <p>More info <a href="http://">here</a></p>
    <hr>
    <h1>Which tools and services are used in laracarte</h1>
    <p>Basically itès built on laravel and bootstrap , but there's a bunch of services used for email and other section </p>
    <ul>
        <li>Laravel </li>
        <li>bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Antony Martin's Geolocation Package</li>
        <li>Michel Fortin's Markdown Parser Package</li>
        <li>Heroko</li>
    </ul>
</div>
@stop