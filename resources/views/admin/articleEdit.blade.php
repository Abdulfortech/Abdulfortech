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
                    <h1 class="text-primary font-weight-bold">Edit Article</h1>
                    <form class="user text-left" method="POST" action="/admin/articles/{{$article->id}}/edit" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="text" name="user_id" value="{{$article->user_id}}" hidden>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" value="{{$article->title}}" name="title" required>
                            @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <label>Category</label>
                                <select class="form-control " name="category" required>
                                    <option>{{$article->category}}</option>
                                    <option>Technology</option>
                                    <option>Internet</option>
                                    <option>Programming</option>
                                    <option>Digital Marketing</option>
                                    <option>Artificial Intelligence</option>
                                    <option>Data Science</option>
                                </select>
                                @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label>Locale</label>
                                <select class="form-control " name="locale" required>
                                    <option>{{$article->locale}}</option>
                                    <option>English</option>
                                    <option>Hausa</option>
                                </select>
                                @if ($errors->has('locale'))
                                <span class="text-danger">{{ $errors->first('locale') }}</span>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option>{{$article->status}}</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                                @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <label>Author</label>
                                <input type="text" class="form-control" name="author" value="{{$article->author}}" required>
                                @if ($errors->has('author'))
                                <span class="text-danger">{{ $errors->first('author') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cover</label>
                            <input type="file" class="form-control " name="thumbnail" >
                            @if ($errors->has('thumbnail'))
                            <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="textarea" name="body" required>
                            {{$article->body}}
                            </textarea>
                            @if ($errors->has('body'))
                            <span class="text-danger">{{ $errors->first('body') }}</span>
                            @endif
                        </div>
                                        
                        <button type="submit" class="btn btn-primary float-right" name="addArticle">
                            <i class="fa fa-paper-plane fa-sm text-white-50 "></i> Submit</button>
                    </form>
                                
                   
                </div>
            </div>
        </div>
    </center>


</div>
<!-- /.container-fluid -->
@endsection 