@extends('frontend.template.layout')
@section('content')
    <!-- Slider -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div>
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{asset('img/new4.jpeg')}}" alt="First-slider" style="width:100%;">
        <!-- <div class="carousel-caption">
              <h1>ARE YOU READY <br> TO APPLY?</h1>
              <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
              <button type="button" class="btn btn-success">Success</button>
         </div> -->
    </div>

    <div class="item">
      <img src="{{asset('img/Slider-two.jpg')}}" alt="Slider-two" style="width:100%;">
        <!-- <div class="carousel-caption">
            <h1>ARE YOU READY <br> TO APPLY?</h1>
            <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <button type="button" class="btn btn-success">Success</button>
       </div> -->
    </div>
  
    <div class="item">
      <img src="{{asset('img/Slider_6.jpg')}}" alt="Slider_6" style="width:100%;">
       <!-- <div class="carousel-caption">
            <h1>ARE YOU READY <br> TO APPLY?</h1>
            <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <button type="button" class="btn btn-success">Success</button>
       </div> -->
    </div>

    <div class="item">
      <img src="{{asset('img/Slider_5.jpg')}}" alt="Slider_6" style="width:100%;">
       <!-- <div class="carousel-caption">
            <h1>ARE YOU READY <br> TO APPLY?</h1>
            <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <button type="button" class="btn btn-success">Success</button>
       </div> -->
    </div>

    <div class="item">
      <img src="{{asset('img/Slider_2.jpg')}}" alt="Slider_6" style="width:100%;">
       <!-- <div class="carousel-caption">
            <h1>ARE YOU READY <br> TO APPLY?</h1>
            <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <button type="button" class="btn btn-success">Success</button>
       </div> -->
    </div>

    <div class="item">
      <img src="{{asset('img/Slider_4.jpg')}}" alt="Slider_6" style="width:100%;">
       <!-- <div class="carousel-caption">
            <h1>ARE YOU READY <br> TO APPLY?</h1>
            <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <button type="button" class="btn btn-success">Success</button>
       </div> -->
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>

<!-- About sec -->
<div class="about-company">
  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 our-ceo">
          <img src="{{asset('img/ijaz-ahmad.jpg')}}" alt="ijaz">
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <h2>CEO MESSAGE</h2>
            <p>I am extremely honored to express my vision as an entrepreneur on a very complex issue of our society that is “Registration” which ever avoiding subject for everyone in our country.
              <br>It is my thinking that every constitution, business, corporate enterprise should be registered primarily with government of Pakistan by this way we can contribute our – part to state and to public as well.
            </p>
            <a href="#">View More</a>
        </div>
    </div>
  </div>
</div>


<!-- Gallery -->

 <div class="about-Gallery">
    <div class="container">
        <div class="row">
            <h3>our services</h3>
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 Smarter">
                 <h3>Smarter <span>way to go through your school</span></h3>
                 <a href="#">View Services</a>
             </div>
             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                 <div class="row graduation-cap">
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Companies-reg"><i class="fa fa-graduation-cap" aria-hidden="true"></i><h4>Companies registration</h4></div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Companies-reg"><i class="fa fa-television" aria-hidden="true"></i><h4>NGO Registration</h4></div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Companies-reg"><i class="fa fa-graduation-cap" aria-hidden="true"></i><h4>School registration</h4></div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><i class="fa fa-male" aria-hidden="true"></i><h4>Teachers Training</h4></div>
                 </div>

                 <div class="row private-institution">
                     <h5>A private institution with a public purpose, Ransom Everglades combines rigorous college preparation.</h5>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                  </div>
                  <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12">
                         <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                  </div>
              </div>         
             </div>
          <!-- <div class="col-lg-3 registration">
              <a href="#">
                  <img src="{{asset('img/edu-01.png')}}" alt="Companies registration">
              <h4>Companies registration</h4>
              </a>
          </div>
          <div class="col-lg-3 registration">
              <a href="#">
                  <img src="{{asset('img/edu-01.png')}}" alt="Chicago">
              <h4>NGO / Society Registration</h4>
              </a>
          </div>
          <div class="col-lg-3 registration">
              <a href="#">
                  <img src="{{asset('img/edu-01.png')}}" alt="Chicago">
              <h4>School registration</h4>
              </a>
          </div>
          <div class="col-lg-3 registration">
              <a href="#">
                  <img src="{{asset('img/edu-01.png')}}" alt="Chicago">
              <h4>Teachers Training</h4>
              </a>
          </div> -->
        </div>
    </div>
</div>

<!-- News section -->
 <div class="news">
    <div class="container">
       <div class="row">
          <h3>our news & events</h3>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                <div class="panel-heading"> 
                   <span class="glyphicon glyphicon-list-alt"></span><b class="news-latest">events</b>
                </div>
                <div class="panel-body">
                   <div class="row">
                      <div class="col-xs-12">
                         <ul class="demo1">
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td>
                                        <img src="{{asset('img/1.png')}}" width="60" class="img-circle" />
                                     </td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                        <br><a href="#">Read more...</a>
                                     </td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td>
                                        <img src="{{asset('img/2.png')}}" width="60" class="img-circle" />
                                     </td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                        <br><a href="#">Read more...</a>
                                     </td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/3.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/4.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/5.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/6.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/7.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                <div class="panel-heading"> 
                   <span class="glyphicon glyphicon-list-alt"></span><b class="news-latest">News</b>
                </div>
                <div class="panel-body">
                   <div class="row">
                      <div class="col-xs-12">
                         <ul class="demo1">
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/1.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/2.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/3.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/4.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/5.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/6.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... 
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                            <li class="news-item">
                               <table cellpadding="4">
                                  <tr>
                                     <td><img src="{{asset('img/7.png')}}" width="60" class="img-circle" /></td>
                                     <td class="news-running">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                     <br><a href="#">Read more...</a></td>
                                  </tr>
                               </table>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

<!-- Testmonial -->

 <div class="testimonial-main">
     <div class="bag-animation">
        <div class="container">
          <section class="testimonial-section2">
                <div class="row text-center">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="h2"> 
                      Happy Client
                   </div>
                   </div>
                </div>
             <div id="testim" class="testim">

<!--         <div class="testim-cover"> -->
                <div class="wrap">

                   <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                   <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                   <ul id="testim-dots" class="dots">
                      <li class="dot active"></li><!--
                      --><li class="dot"></li><!--
                      --><li class="dot"></li><!--
                      --><li class="dot"></li><!--
                      --><li class="dot"></li>
                   </ul>
                   <div id="testim-content" class="cont">                    
                      <div class="active">
                         <div class="img">
                            <img src="{{asset('img/course-bgg.jpg')}}" alt="client">
                         </div>
                         <div class="h4">Mr. Munir Ahmad.</div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                      </div>

                      <div>
                         <div class="img"><img src="{{asset('img/t2.jpg')}}" alt=""></div>
                         <div class="h4">Uzman Maqsood Kiani</div>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                      </div>

                      <div>
                            <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
                            <div class="h4">Kellie</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                      </div>

                      <div>
                            <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt=""></div>
                            <div class="h4">Jessica</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                      </div>

                      <div>
                            <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
                            <div class="h4">Kellie</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                      </div>
                   </div>
                </div>
             </div>
          </section>
        </div>
    </div>
 </div>
@endsection