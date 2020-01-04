@extends('frontend.template.layout')
@section('content')
<div class="container">
	<section class="section sec-body">
    <h2 class="section-heading h1 pt-4">NGO Registration/ Society Registration</h2>
    <p class="section-description">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within matter of hours to help you.</p>

    <div class="row">
        <div class="col-md-12 col-xl-9 contact-form7">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST" class="">


                <div class="row school-reg">

                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="name" class="">NGO/Society Name</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="email" class="">NGO/Society Address</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="email" class="">Establish Date</label>
                            	<input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row school-reg">
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="name" class="">President Name</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="email" class="">Purpose</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="email" class="">Executive Name</label>
                            	<input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row school-reg">
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="name" class="">Executive Father Name</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="email" class="">Executive Address</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="email" class="">Executive Ocupation</label>
                            	<input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row school-reg">
                   <div class="col-md-4">
                       <div class="md-form">
                           <label for="name" class="">Executive Father Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                       </div>
                   </div>
                   <!--Grid column-->
                </div>

            </form>

            <div class="center-on-small-only">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Submit</a>
            </div>
            <div class="status"></div>
        </div>
    </div>
</section>
 </div>
 @endsection