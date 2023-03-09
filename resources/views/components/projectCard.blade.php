@props(['project'])
<!-- Project Card  -->
<a href="/admin/projects/{{$project->id}}" >
    <div class="card border-bottom-primary shadow h-100 project">
        <img src="{{ asset('storage/'.$project->thumbnail) }}" >
        <div class="card-body p-3 text-left ">
            <h3 class="text-dark font-weight-bold">{{$project->pname}}</h3>
            <h6 class="text-primary font-weight-bold">
                {{$project->category}} 
                <i class="fas fa-dot-circle text-primary fa-sm"></i>    
                {{$project->progress}} 
                <i class="fas fa-dot-circle text-primary fa-sm"></i> 
                {{$project->status}} 
            </h6>
        </div>
    </div>
</a>