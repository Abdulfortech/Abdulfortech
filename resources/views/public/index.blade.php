@extends('layout.publicLayout')

@section('contents')

<!-- Header container -->
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4 mt-4 rounded-circle shadow" src="{{ asset('assets/img/me.png') }}" alt="" width="150" height="150">
    <h1 class="display-5 fw-bold text-color2">Hi, I am Abdullahi </h1>
    <div class="col-lg-6 mx-auto">
        <H5 class="lead mb-4">
            I am a fullstack web developer and IT Consultant, I help people build website and how to use digital technology to improve life and business.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="contact" class="btn btn-primary btn-lg px-4"><i class="fa fa-envelope"></i> Contact Me</a>
        </div>
    </div>
</div>

<!-- blog -->
<section class="farko bg-light p-3">
    <div class="container text-center mt-4 p-0">
        <h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">Latest <span class="text-color2">Articles</span></h1>
        <div class="row mb-4">
            
            <!-- single card -->
            <div class="col-md-4 mb-3">
                <a href="project?id=1" class="text-decoration-none">
                    <div class="card shadow blog border-bottom-primary">
                        <div class="card-body p-3 ">
                            <h3 class="text-dark fw-bold text-start">The advantages of using Github for managing projects</h3>
                            <h6 class="text-primary fw-bold text-start">Web App 
                                <i class="fa fa-dot-circle-o text-primary fa-sm"></i> 
                                On-Going
                            </h6>
                            <p class="text-dark text-justify">What dffdsfndsfs sfs..</p>
                        </div> 
                    </div>
                </a>
            </div>
        </div>
        <a href="projects" class="btn btn-primary  px-3"><i class="fa fa-file"></i> View More</a>
    </div>
</section>
	<!-- Featured Projects -->
	<section class="farko  p-3">
		<div class="container text-center mt-4 p-0">
			<h1 class="featurette-heading fw-bold mt-4 mb-5 text-color1">Latest <span class="text-color2">Projects</span></h1>
			<div class="row mb-4">
				<!-- single card -->
				<div class="col-md-4 mb-3">
                    <a href="project?id=1" class="text-decoration-none">
                        <div class="card shadow project border-bottom-primary">
                            <img src="img/photo2.png">
                            <div class="card-body p-3 ">
                                <h4 class="text-dark fw-bold text-start">dbsgfdffsf[School Project]</h4>
                                <h6 class="text-primary fw-bold text-start">sbvsvhsvs 
                                    <i class="fa fa-dot-circle-o text-primary fa-sm"></i> 
                                    Completed
                                </h6>
                                <p class="text-dark text-justify">efkfjffdf f..</p>
                            </div> 
                        </div>
                    </a>
                </div>
			</div>
			<a href="projects" class="btn btn-primary  px-3"><i class="fa fa-briefcase"></i> View All Projects</a>
		</div>
	</section>
	