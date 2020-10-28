@extends('layout/layout')
@section('content')
<div class="site-wrap">
    <div class="site-navbar mt-4">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <h1 class="mb-0"><a href="index" class="text-white h2 mb-0"><strong>Event0<span
                                    class="text-primary">.com</span></strong></a></h1>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                class="site-menu-toggle js-menu-toggle text-white"><span
                                    class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active">
                                <a href="index">Home</a>
                            </li>
                            <li><a href="events">Events</a></li>
                            <li><a href="contact">Contact</a></li>
                            <li class="has-children">
                                {{session()->get('user')}}
                                    <ul class="dropdown arrow-top">
                                        <li><a href="logout">Logout</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<div class="site-blocks-cover overlay" style="background-image: url('images/zongo.jpg');" data-aos="fade"
    data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 text-center" data-aos="fade-up" data-aos-delay="400">
                <h1 class="mb-4">IT'S TIME TO SHOW YOUR SKILLS</h1>
               
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">Upcoming Events</h2>
              
            </div>
        </div>
             
        <div class="row">
            @foreach($data as $item)
            <div class="col-md-6 col-lg-3 p-3" data-aos="fade-up" data-aos-delay="100">   
                <a href="single/{{$item->id}}" class="unit-9"> 
                    <div class="image" style="background-image: url('storage/event_posters/{{$item->EventPoster}}');"></div>
                    <div class="unit-9-content">
                        <h2>{{$item->EventName}}</h2>
                        <span>{{$item->Eventdate}}</span>
                        <span>{{$item->EventType}}</span>
                    </div>
                </a> 
            </div>
            @endforeach
        </div>
    </div>
</div>



<div class="site-section bg-dark block-13">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">Love By Our Listeners</h2>
                
            </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Megan Smith</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto.
                        Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Brooke Cagle</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto.
                        Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Philip Martin</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto.
                        Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Steven Ericson</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto.
                        Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Nathan Dumlao</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto.
                        Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Brook Smith</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto.
                        Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="site-section">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">INSTITUTES</h2>
               
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="images/person_1.jpg" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit
                            nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="images/person_2.jpg" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit
                            nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="images/person_3.jpg" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Philip Martin</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit
                            nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="images/person_4.jpg" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Steven Ericson</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit
                            nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="images/person_5.jpg" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Nathan Dumlao</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit
                            nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">
                    <img src="images/person_6.jpg" alt="Image" class="img-fluid">
                    <div class="text">
                        <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit
                            nemo.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-primary" data-aos="fade">
    <div class="container">
        <div class="row">
            <a href="https://www.facebook.com/event0" class="col-2 text-center py-4 social-icon d-block"><span
                    class="icon-facebook text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
                    class="icon-twitter text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
                    class="icon-instagram text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
                    class="icon-linkedin text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
                    class="icon-pinterest text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
                    class="icon-youtube text-white"></span></a>
        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">About Event0</h3>
                    <p>Even0 is the platform where you can show your talent.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="index">Home</a></li>
                            <li><a href="events">Events</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
          <script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with
          <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href=#
            target="_blank">Kevin-Chikhaliya</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
    </div>
</footer>

</div>

@endsection
