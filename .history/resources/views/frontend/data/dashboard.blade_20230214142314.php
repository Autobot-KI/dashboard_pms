@extends('frontend.layouts.app')

@section('title') Dashboard - {{ config('app.name') }} @endsection
@section('content')

<section class="banner-style-two">
    <div class="pattern-layer" style="background-image: url(/detox/assets/images/shape/pattern-2.png)"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="sec-title text-center mt-4">
                <p>Dashboard Project 11</p>
                <h2>PELAYANAN</h2>
            </div>
            <iframe title="Project 11" width="600" height="373.5"
                src="https://app.powerbi.com/view?r=eyJrIjoiMzIxYTE2NzItYjU4Zi00NjQ0LWJkYjAtZTFjZDU5OWMzNzA0IiwidCI6ImY5ZGM2OTdmLTI4ZmUtNDU2My1hM2FhLWE2NTg2M2ZlN2YxYSIsImMiOjEwfQ%3D%3D&pageName=ReportSection"
                frameborder="0" allowFullScreen="true"></iframe>
        </div>
    </div>
    </div>
    @endsection