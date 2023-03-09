@props(['article'])
<!-- Project Card  -->
<a href="/admin/articles/{{$article->id}}" >
    <div class="card border-bottom-primary shadow h-100 project">
        <div class="card-body p-3 text-left ">
            <h4 class="text-dark font-weight-bold">{!! substr(strip_tags($article->title),0,70) !!}</h4>
            <h6 class="text-primary font-weight-bold">
                {{$article->category}} 
                <i class="fas fa-dot-circle text-primary fa-sm"></i> 
                {{$article->locale}}
            </h6>
        </div>
    </div>
</a>