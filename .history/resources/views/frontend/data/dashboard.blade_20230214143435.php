@extends('frontend.layouts.app')

@section('title') Dashboard - {{ config('app.name') }} @endsection
@section('content')


<section class="banner-style-two">
    <div class="sec-title text-center mt-4">
        <p>Dashboard Project 11</p>
        <h2>PELAYANAN</h2>
    </div>
    <iframe title="Project 11" width="100%" height="800px"
        src="https://app.powerbi.com/view?r=eyJrIjoiMzIxYTE2NzItYjU4Zi00NjQ0LWJkYjAtZTFjZDU5OWMzNzA0IiwidCI6ImY5ZGM2OTdmLTI4ZmUtNDU2My1hM2FhLWE2NTg2M2ZlN2YxYSIsImMiOjEwfQ%3D%3D&pageName=ReportSection"
        frameborder="0" allowFullScreen="true"></iframe>

    </div>
    </div>
    
<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>

    @endsection