@extends('layout.publicLayout')

@section('contents')

<!-- Featured Projects -->
<section class="farko py-5 my-5 p-3">
    <center>
        <div class="col-12 col-md-8 mb-4 p-0">
            <div class="blog-page">
                <h1 class="text-primary font-weight-bold">{{$article['title']}}</h1>
                <h5 class="text-primary font-weight-bold"> 
                    <i class="fa fa-user-circle text-primary fa-sm"></i>
                    {{$article['author']}}
                    <i class="fa fa-dot-circle-o text-primary fa-sm"></i>
                    {{$article['category']}}
                    <i class="fa fa-calendar text-primary fa-sm"></i>
                        {!! substr($article['created_at'],0,10) !!}
                </h5>
                @if($article['thumbnail'] !== null)
                <img src="{{ asset('storage/'.$article->thumbnail) }}" class="my-3">
                @endif
                <div class="body text-justify">
                    {!! $article['body']!!}
                </div>
            </div>
        </div>
    </center>
</section>
	