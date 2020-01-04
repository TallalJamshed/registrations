@extends('frontend.template.layout')
@section('content')
<!--Services  -->
<div class="container">
	<section class="section sec-body">
    <h2 class="section-heading h1 pt-4">Contact us</h2>
    <p class="section-description">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within matter of hours to help you.</p>

    <div class="row">
        <div class="col-md-8 col-xl-9 contact-form7">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST" class="">
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                           
                            <label for="name" class="">Your name</label>
                             <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="center-on-small-only">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send Message</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i><span>San Francisco, CA 94126, USA</span>
                    <!-- <p>San Francisco, CA 94126, USA</p> -->
                </li>

                <li><i class="fa fa-phone fa-2x"></i><span>+ 01 234 567 89</span>
                    <!-- <p>+ 01 234 567 89</p> -->
                </li>

                <li><i class="fa fa-envelope fa-2x"></i><span>contact@mdbootstrap.com</span>
                    <!-- <p>contact@mdbootstrap.com</p> -->
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
    <div class="row">
    	<div class="col-md-12 col-xl-6">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.5922393126357!2d73.00401021454411!3d33.667725945343804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95f74f868fb3%3A0xee019001c4b8b277!2sSLS%20Montessori%20%26%20School%2C%20G-11%20Branch!5e0!3m2!1sen!2s!4v1577098139798!5m2!1sen!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    	</div>
    </div>

</section>
 </div>
@endsection