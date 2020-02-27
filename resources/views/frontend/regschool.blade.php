@extends('frontend.template.layout')
@section('content')
<!--Services  -->
<div class="container">
	<section class="section sec-body">
    <h2 class="section-heading h1 pt-4">School Registration</h2>
    <p class="section-description">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within matter of hours to help you.</p>

    <div class="row">
        <div class="col-md-12 col-xl-9 col-lg-12 col-sm-12 col-xs-12 contact-form7">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST" class="">


                <div class="row school-reg">
                	<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="email" class="">School/College Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="email" class="">Principal Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="email" class="">Principal Contact</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row school-reg">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="email" class="">School/College Level</label>
                            <select class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="email" class="">School Type</label>
                            <select class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <label for="name" class="">Instruction Medium</label>
                            <select class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row school-reg">
                   <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                       <div class="md-form">
                            <label for="name" class="">No of Boys</label>
                            <input type="text" id="name" name="name" class="form-control">
                       </div>
                   </div>
                   <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="name" class="">No of Girls</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="name" class="">Number of Teaching Staff</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row school-reg">
                   <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                       <div class="md-form">
                            <label for="name" class="">Province</label>
                            <input type="text" id="name" name="name" class="form-control">
                       </div>
                   </div>
                   <!--Grid column-->
                   <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                       <div class="md-form">
                            <label for="name" class="">City</label>
                            <select class="form-control">
                                <option value=""></option>
                            </select>
                       </div>
                   </div>
                   <!--Grid column-->
                   <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                       <div class="md-form">
                           <label for="name" class="">Area</label>
                            <select class="form-control">
                             	<option value=""></option>
                            </select>
                        </div>
                    </div>
                   <!--Grid column-->
                </div>

                <div class="row school-reg">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                             <label for="name" class="">Sub Area</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                             <label for="name" class="">House-street address</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="md-form">
                            <label for="name" class="">Covered Area</label>
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