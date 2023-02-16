@extends('frontend.layouts.dash')

@section('title') Dashboard - {{ config('app.name') }} @endsection
@section('content')
<section class="banner-style-two">
    @include('frontend.includes.side')
    <div class="sec-title text-center">
        <p>Dashboard Project 11</p>
        <h2>Visit</h2>
    </div>
    <iframe title="Project 11_Visit" width="100%" height="800px" src="https://app.powerbi.com/view?r=eyJrIjoiMTliY2M1MDktYmNiOC00OTZiLWFkZDMtZmVkODc3ZmYyMTg0IiwidCI6ImY5ZGM2OTdmLTI4ZmUtNDU2My1hM2FhLWE2NTg2M2ZlN2YxYSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
    </div>
    </div>
<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>
@endsection