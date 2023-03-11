@extends('layout.publicLayout')

@section('contents')

<!-- blog -->
<section class="farko py-5 my-5 p-3">
    <div class="container text-center mt-4 p-0">
        <h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">My <span class="text-color2">Blog</span></h1>
        <div class="row mb-4">
            @unless(count($articles) == 0)
            @foreach($articles as $article)
            <!-- single card -->
            <div class="col-md-4 mb-3">
                <a href="/blog/{{$article->slug}}" class="text-decoration-none">
                    <div class="card shadow blog border-bottom-primary">
                        <div class="card-body p-3 ">
                            <h4 class="text-dark fw-bold text-start">{{$article->title}}</h4>
                            <h6 class="text-primary fw-bold text-start">
                                <i class="fa fa-dot-circle-o text-primary fa-sm"></i>  {{$article->category}}
                                <i class="fa fa-calendar text-primary fa-sm"></i> {{ substr($article->created_at, 0,10) }}
                            </h6>
                            <p class="text-dark text-justify">{!! substr(strip_tags($article['body']),0,90) !!}..</p>
                        </div> 
                    </div>
                </a>
            </div>
            @endforeach
            @endunless
        </div>
    </div>
</section>
