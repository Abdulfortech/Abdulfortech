@extends('layout.publicLayout')

@section('contents')

<section class="farko container py-5 my-5 p-3">
    <h1 class="featurette-heading text-center fw-bold mt-4 mb-5 text-color1">Contact <span class="text-color2"> Me</span></h1>
    <div class="row">
        <div class="container col-md-6 text-center">
            <form method="POST" action="process.php">
                <div class="form-group text-start">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group text-start">
                        <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group text-start">
                    <label>Message</label>
                    <textarea class="form-control" name="body" rows="5" required></textarea>
                </div>
                <button type="sumbit" class="btn btn-primary mt-4 mb-4" name="sendMail">Send</button>
            </form>
        </div>
        <div class="container col-md-6 text-center ">
            <div class="row">
                <!-- contact card -->
                <div class="col-6">
                    <a href="mailto:abdul@abdulfortech.com" class="text-decoration-none">
                        <div class="card shadow contact-box border-bottom-primary">
                            <div class="card-body">
                                <i class="fa fa-envelope"></i>
                                <h6 class="text-dark fw-bold text-center">abdul@abdulfortech.com</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- contact card -->
                <div class="col-6">
                    <a href="https://twitter.com/abdulfortech" class="text-decoration-none">
                        <div class="card shadow contact-box border-bottom-primary">
                            <div class="card-body">
                                <i class="fa fa-twitter"></i>
                                <h5 class="text-dark fw-bold text-center">Abdulfortech</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- contact card -->
                <div class="col-6">
                    <a href="https://linkedin.com/" class="text-decoration-none">
                        <div class="card shadow contact-box border-bottom-primary">
                            <div class="card-body">
                                <i class="fa fa-linkedin"></i>
                                <h5 class="text-dark fw-bold text-center">Abdullahi Aminu</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- contact card -->
                <div class="col-6">
                    <a href="https://w" class="text-decoration-none">
                        <div class="card shadow contact-box border-bottom-primary">
                            <div class="card-body">
                                <i class="fa fa-whatsapp"></i>
                                <h5 class="text-dark fw-bold text-center">+2348067456793</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

