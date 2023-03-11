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
    <!-- Content Row -->
    <div class="row">
        <!-- stats Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                All Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                               {{$allArticles}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats CARDS -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Active Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$activeArticles}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- stats Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                English Articles
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                               {{$englishArticles}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- stats Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Hausa Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$hausaArticles}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h3 class="text-center">{{$title}}</h3>
    <!-- Content Row -->
    <div class="row">
        @unless(count($articles) == 0)
        @foreach($articles as $article)
        <!-- Article Card  -->
        <div class="col-xl-4 col-12 mb-4">
            <x-ArticleCard :article="$article" />
        </div>
        @endforeach
        @else
        <div class="col-12 py-5"><p class="text-center">No article found</p></div>
        @endunless
    </div>

</div>
<!-- /.container-fluid -->
@endsection 