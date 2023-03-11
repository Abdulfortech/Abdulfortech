@extends('layout.publicLayout')

@section('contents')

<!-- Header container -->
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4 mt-4 rounded-circle shadow" src="{{ asset('assets/img/me.png') }}" alt="" width="150" height="150">
    <h1 class="display-5 fw-bold text-color2">About</h1>
    <div class="col-lg-6 mx-auto">
        <H5 class="lead mb-4 text-justify">
            Abdullahi Aminu Mudi is a web developer and IT Consultant from Kano State of Nigeria, with 
            close to a decade experience in Information Technology and developing amazing web applications using PHP and JavaScript.
            I help people build website and how to use digital technology to improve life and business.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="contact" class="btn btn-primary btn-lg px-4"><i class="fa fa-envelope"></i> Contact Me</a>
        </div>
    </div>
</div>
