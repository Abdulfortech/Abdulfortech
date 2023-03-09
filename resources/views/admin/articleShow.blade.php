@extends('layout.adminLayout')

@section('contents')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><a href="/admin/articles">Articles</a></h1>
        <a href="/admin/article/new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Article</a>
    </div>
    
    <center>
        <div class="col-12 col-md-10 mb-4 p-0">
            <div class="card border-left-primary shadow h-100 project-page">
                <div class="card-body text-left p-2 ">
                    <h1 class="text-primary font-weight-bold">{{$article->title}} </h1>
                    <!-- features : status, category -->
                    <h6 class="text-primary font-weight-bold"> 
                        {{$article->author}} 
                        <i class="fas fa-dot-circle text-primary fa-sm"></i>
                        {{$article->category}} 
                        <i class="fas fa-dot-circle text-primary fa-sm"></i>
                        {{$article->locale}} 
                        <i class="fas fa-dot-circle text-primary fa-sm"></i>
                        {{$article->status}} 
                        <i class="fas fa-dot-circle text-primary fa-sm"></i>
                        {{$article->created_at}} 
                    </h6>
                    <!-- <img src="{{ asset('storage/'.$article->thumbnail) }}" class="my-4"> -->
                    <div class="text-justify my-3">
                        {!! $article->body !!} 
                    </div>
                    <hr>
                    <center>
                        <a href="/admin/articles/{{$article->id}}/edit" class="btn btn-sm btn-primary shadow-sm mb-1">
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit article
                        </a> 
                        @if ($article->status == 'Inactive')
                        <a href="/admin/articles/{{$article->id}}/activate" class="btn btn-sm btn-success shadow-sm mb-1">
                            <i class="fas fa-arrow-up fa-sm text-white-50"></i> Activate
                        </a>
                        @else
                        <a href="/admin/articles/{{$article->id}}/deactivate" class="btn btn-sm btn-warning shadow-sm mb-1">
                            <i class="fas fa-arrow-down fa-sm text-white-50"></i> Deactivate
                        </a>
                        @endif
                        <a href="/admin/articles/{{$article->id}}/delete" class="btn btn-sm btn-danger shadow-sm mb-1">
                            <i class="fas fa-trash fa-sm text-white-50"></i> Delete
                        </a>
                    </center>
                   
                </div>
            </div>
        </div>
    </center>


</div>
<!-- /.container-fluid -->
@endsection 