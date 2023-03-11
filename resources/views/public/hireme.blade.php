@extends('layout.publicLayout')

@section('contents')

<section class="farko container py-5 my-5 p-3">
    <!-- <h1 class="featurette-heading text-center  mt-4 mb-5 text-color1">Hire a <span class="text-color2"> Professional</span></h1> -->
    <div class="container  mt-4 mb-4">
        <div class="row">
            <div class="col-md-7 pt-4">
                <h1 class="featurette-heading fw-bold pt-5 text-color1">Hire a Professional</h1>
                <p class=" pt-2 text-justify">SGR build projects and deliver services that are qualitative, affordable and according to requirements
                    of our customers, we belive this is the best way to deliver a good service to you that will satisfy you and create a 
                    value for your business. Below are some services you can request from us.</p>
                <ul>
                    <li class="fw-bold">Development Projects</li>
                    <li class="fw-bold">IT Solutions</li>
                    <li class="fw-bold">Digital Marketing</li>
                    <li class="fw-bold">IT Management & Maintainance</li>
                    <li class="fw-bold">School Projects</li>
                </ul>
            </div>
            <div class="col-md-5">
                <form method="POST" action="{{ route('requestService') }}" class="p-3 p-md-5 border rounded-3 bg-light">
                    @csrf
                    <div class="form-group ">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Your name"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="contact" name="contact" placeholder="Phone number or email"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Type of Project</label>
                        <select name="type" class="form-control" required>
                            <option value="">Choose..</option>
                            <option>Simple Website</option>
                            <option>Complex Website</option>
                            <option>E-commerce</option>
                            <option>Informatio Management System</option>
                            <option>School Management System</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc"  class="form-control" placeholder="Your message.." rows="5" required></textarea>
                    </div>
                    <center><input type="submit" class="btn btn-primary mt-2 mb-2" name="projectRequest" value="Send"></center>
                </form>					
            </div>
        </div>			
    </div>

</section>

