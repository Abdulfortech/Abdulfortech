@extends('layout.adminLayout')

@section('contents')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><a href="/admin/projects">Projects</a></h1>
        <a href="/admin/project/new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-folder fa-sm text-white-50"></i> New Project</a>
    </div>
    <!-- Content -->
    <center>
        <div class="col-12 col-md-10 mb-4 p-0">
            <div class="card border-left-primary shadow h-100">
                <div class="card-body text-center p-2">
                    <i class="fa fa-folder text-primary" style="font-size:90px;"></i>
                    <h2 class="text-primary text-center font-weight-bold">Add New Project</h2>
                    <form class="user text-left" enctype="multipart/form-data" action="{{ route('projectCreate') }}" method="POST">
                        @csrf
                        <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>Project Name</label>
                                <input type="text" class="form-control " name="pname" required>
                                @if ($errors->has('pname'))
                                <span class="text-danger">{{ $errors->first('pname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 mb-3 mb-sm-0">
                                <label>Project Link</label>
                                <input type="url" class="form-control " name="link" required>
                                @if ($errors->has('link'))
                                <span class="text-danger">{{ $errors->first('link') }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3 mb-sm-0">
                                <label>Category</label>
                                <select class="form-control " name="category" required>
                                    <option selected value="">Choose..</option>
                                    <option>Website</option>
                                    <option>Web App</option>
                                    <option>Android App</option>
                                    <option>API</option>
                                    <option>Landing Page</option>
                                </select>
                                @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                @endif
                            </div>
                            <div class="col-md-2 mb-3 mb-sm-0">
                                <label>Progress</label>
                                <select class="form-control " name="progress" required>
                                    <option selected value="">Choose..</option>
                                    <option>On-Going</option>
                                    <option>Completed</option>
                                </select>
                                @if ($errors->has('progress'))
                                <span class="text-danger">{{ $errors->first('progress') }}</span>
                                @endif
                            </div>
                            <div class="col-md-2 mb-3 mb-sm-0">
                                <label>Status</label>
                                <select class="form-control " name="status" required>
                                    <option selected value="">Choose..</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Project Thumbnail</label>
                            <input type="file" class="form-control " name="thumbnail" required>
                            @if ($errors->has('thumbnail'))
                            <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Project Description</label>
                            <textarea class="textarea" name="description" placeholder="Full Description" required></textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <center><button type="submit" class="btn btn-primary"><i class="fas fa-save fa-sm text-white-50 "></i> Save Project</button></center>
                    </form>
                </div>
            </div>
        </div>
    </center>


</div>
<!-- /.container-fluid -->
@endsection 