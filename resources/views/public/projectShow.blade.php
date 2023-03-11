@extends('layout.publicLayout')

@section('contents')

<!-- Featured Projects -->
<section class="farko py-5 my-5 p-3">
    <center>
        <div class="col-12 col-md-8 mb-4 p-0">
            <div class="card border-left-primary shadow project-page">
                <div class="card-body text-start p-2 ">
                    <h1 class="text-primary font-weight-bold">{{$project['pname']}}</h1>
                    <h6 class="text-primary font-weight-bold"> 
                        {{$project['category']}}
                        <i class="fa fa-dot-circle-o text-primary fa-sm"></i>
                         {{$project['progress']}}
                    </h6>
                    <img src="{{ asset('storage/'.$project->thumbnail) }}" class="my-3">
                    <div class="text-justify mb-5" style="font-size: 20px;">
                        {!!$project['description']!!}
                    </div>
                    <center>
                        @if ($project->link !== '')                             
                            <a href="{{$project['link']}}" target="_blank" class="btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-external-link fa-sm text-white-50"></i> Preview
                            </a>
                        @endif
                            <a href="/contact" class="btn btn-sm btn-primary shadow-sm">
                                <i class="fa fa-envelope fa-sm text-white-50"></i> Contact Me
                            </a>
                        
                    </center>                   
                </div>
            </div>
        </div>
    </center>
</section>
	