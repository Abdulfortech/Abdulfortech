@extends('layout.adminLayout')

@section('contents')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Skills</h1>
        <!-- <a href="/admin/skill/new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-folder fa-sm text-white-50"></i> New Skill</a> -->
    </div>
    
    <h3 class="text-center">{{$title}}</h3>
    <!-- add new skill -->
    <div class="col-12 col-md-12 mb-4 p-0">
        <div class="card border-left-primary shadow h-100">
            <div class="card-body text-center p-2">
                <h2 class="text-primary text-center font-weight-bold">Add New Skill</h2>
                <form class="user text-left" action="{{ route('SkillCreate') }}" method="POST">
                    @csrf
                    <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
                    <div class="form-group row">
                        <div class="col-md-8 mb-3 mb-sm-0">
                            <label>Skill Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="col-md-4 mb-3 mb-sm-0">
                            <label>Status</label>
                            <select class="form-control " name="status" required>
                                <option selected value="">Choose..</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <center><button type="submit" class="btn btn-primary" name="addSkill"><i class="fas fa-save fa-sm text-white-50 "></i> Save </button></center>
                </form>
            </div>
        </div>
    </div>
    <!-- list of skills -->
    <div class="col-12 col-md-12 mb-4 p-0">
        <div class="card border-left-primary shadow h-100">
            <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;?>
                        @foreach($skills as $skill)
                        <tr>
                            <td><?= $count; ?></td>
                            <td>{{$skill->title}}</td>
                            <td>{{$skill->status}}</td>
                            <td class="row">
                                @if ($skill->status == 'Active')
                                <form class="col-2" action="{{ route('ActivateSkill') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" name="skill_id" value="{{$skill->skill_id}}" hidden>
                                    <input type="text" name="title" value="{{$skill->title}}" hidden>
                                    <input type="text" name="status" value="Inactive" hidden>
                                    <button type="submit" class="btn btn-sm btn-warning shadow-sm">
                                        <i class="fas fa-arrow-down fa-sm text-white-50"></i>
                                    </button> 
                                </form>
                                @else
                                <form class="col-2" action="{{ route('ActivateSkill') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" name="skill_id" value="{{$skill->skill_id}}" hidden>
                                    <input type="text" name="title" value="{{$skill->title}}" hidden>
                                    <input type="text" name="status" value="Active" hidden>
                                    <button type="submit" class="btn btn-sm btn-success shadow-sm">
                                        <i class="fas fa-arrow-down fa-sm text-white-50"></i>
                                    </button> 
                                </form>
                                @endif
                                <form class="col-2" action="{{ route('DeleteSkill') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" name="skill_id" value="{{$skill->skill_id}}" hidden>
                                    <button type="submit" class="btn btn-sm btn-danger shadow-sm">
                                        <i class="fas fa-trash fa-sm text-white-50"></i>
                                    </button> 
                                </form>
                            </td>
                            
                        </tr>
                        <?php $count++;?>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection 