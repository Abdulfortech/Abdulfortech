@extends('layout.publicLayout')

@section('contents')

<!-- Featured Projects -->
<section class="farko py-5 my-5 p-3">
    <div class="container text-center mt-4 p-0">
        <h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">My <span class="text-color2">Projects</span></h1>
        <div class="row mb-4">
            @unless(count($projects) == 0)
            @foreach($projects as $project)
            <!-- single card -->
            <div class="col-md-4 mb-3">
                <a href="/projects/{{$project['slug']}}" class="text-decoration-none">
                    <div class="card shadow project border-bottom-primary">
                        <img src="{{ asset('storage/'.$project->thumbnail) }}">
                        <div class="card-body p-3 ">
                            <h4 class="text-dark fw-bold text-start">{{$project['pname']}}</h4>
                            <h6 class="text-primary fw-bold text-start">{{$project['category']}}
                                <i class="fa fa-dot-circle-o text-primary fa-sm"></i> 
                                {{$project['progress']}}
                            </h6>
                            <p class="text-dark text-justify">{!! substr(strip_tags($project['description']),0,100) !!}..</p>
                        </div> 
                    </div>
                </a>
            </div>
            @endforeach
            @endunless
        </div>
    </div>
</section>
	