@extends('layout.adminLayout')

@section('contents')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><a href="/admin/projects">Projects</a></h1>
        <a href="/admin/project/new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Project</a>
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
                                All Projects</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$allProjects}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder fa-2x text-gray-300"></i>
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
                                {{$activeProjects}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder fa-2x text-gray-300"></i>
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
                                Inactive Projects
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$inactiveProjects}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder fa-2x text-gray-300"></i>
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
                                Completed Projects</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$completeProjects}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h3 class="text-center">{{$title}}</h3>
    <!-- Content Row -->
    <div class="row">
        @unless(count($projects) == 0)
        @foreach($projects as $project)
        <!-- Project Card  -->
        <div class="col-xl-4 col-12 mb-4">
            <x-projectCard :project="$project" />
        </div>
        @endforeach
        @else
        <div class="col-12 py-5"><p class="text-center">No project found</p></div>
        @endunless
    </div>

</div>
<!-- /.container-fluid -->
@endsection 