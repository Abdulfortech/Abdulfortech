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
    
    <center>
        <div class="col-12 col-md-10 mb-4 p-0">
            <div class="card border-left-primary shadow h-100 project-page">
                <div class="card-body text-left p-2 ">
                    <h1 class="text-primary font-weight-bold">{{$project->pname}} </h1>
                    <!-- features : status, category -->
                    <h6 class="text-primary font-weight-bold"> 
                        {{$project->category}} 
                        <i class="fas fa-dot-circle text-primary fa-sm"></i>    
                        {{$project->progress}} 
                        <i class="fas fa-dot-circle text-primary fa-sm"></i> 
                        {{$project->status}} 
                        <i class="fas fa-dot-circle text-primary fa-sm"></i>
                        {{$project->created_at}} 
                    </h6>
                    <!-- <img src="{{ asset('storage/'.$project->thumbnail) }}" class="my-4"> -->
                    <div class="text-justify my-3">
                        {!! $project->description !!} 
                    </div>
                    <hr>
                    <center>
                        <a href="/admin/projects/{{$project->id}}/edit" class="btn btn-sm btn-primary shadow-sm mb-1">
                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit Project
                        </a> 
                        @if ($project->status == 'Inactive')
                        <a href="/admin/projects/{{$project->id}}/activate" class="btn btn-sm btn-success shadow-sm mb-1">
                            <i class="fas fa-arrow-up fa-sm text-white-50"></i> Activate
                        </a>
                        @else
                        <a href="/admin/projects/{{$project->id}}/deactivate" class="btn btn-sm btn-warning shadow-sm mb-1">
                            <i class="fas fa-arrow-down fa-sm text-white-50"></i> Deactivate
                        </a>
                        @endif
                        <a href="/admin/projects/{{$project->id}}/delete" class="btn btn-sm btn-danger shadow-sm mb-1">
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