@extends('frontend.layouts.app')

@section('title') Dashboard - {{ config('app.name') }} @endsection
@section('content')
@include('frontend.includes.side')

<section class="banner-style-two">
    <div class="sec-title text-center mt-4">
        <p>Dashboard Project 11</p>
        <h2>PELAYANAN</h2>
    </div>
    <iframe title="Project 11_Perlayanan" width="600" height="373.5" src="https://app.powerbi.com/view?r=eyJrIjoiZjQ5ZWFjN2EtMDVmMC00OGU2LWEzMzItZGE4ODVlOTNjYzgzIiwidCI6ImY5ZGM2OTdmLTI4ZmUtNDU2My1hM2FhLWE2NTg2M2ZlN2YxYSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
    </div>
    </div>
<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>
@endsection