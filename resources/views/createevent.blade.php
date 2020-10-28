<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
                                <li>
                                    <a href="index">Home</a>
                                </li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="events">Events</a></li>
                                <li class="has-children">
                                    <a href="event-list">MyEvent</a>
                                    <ul class="dropdown arrow-top">
                                      <li>
                                        <a href="createevent">CreateEvent</a>
                                      </li>
                                    </ul>
                                  </li>
                                <li class="has-children"> {{session('user')}}
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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/hero_bg_1.jpg');"
        data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">

                    <h1 class="text-white">Create-Event</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 mb-5 mt-2">
                    <form action="createevent" class="contact-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                            <input type="text" name="user_id" value="{{session()->get('userid')}}" class="form-control" readonly >
                            </div>
                        </div>
                        
                        
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold">EventName</label>
                                <input type="text" name="EventName" class="form-control" placeholder="Event-name">
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventPlace</label>
                                <input type="text" name="Eventplace" class="form-control" placeholder="Event-place">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventCordinator</label>
                                <input type="text" name="EventCordinator" class="form-control"
                                    placeholder="EventCordinator">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventCordinatorEmail</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Event-Cordinator-email">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventDate</label>
                                <input type="date" name='date' class="form-control" placeholder="Eventdate">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventTime</label>
                                <input type="time" name="time" class="form-control" placeholder="Eventtime">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventType</label>
                                <select class="form-control form-control-sm" name='eventType'>
                                    <option value="Technical-Event">Technical-Event</option>
                                    <option value="Non-Technical-Event">Non-Technical-Event</option>
                                    <option value="Gaming-Event">Gaming-Event</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventDetails</label>
                                <textarea name="w3review" cols="30" rows="5" class="form-control"
                                    placeholder="Tell me about the Event"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold">EventPoster</label>
                                <input type="file" class="form-control form-control-sm" name="poster" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="CreateEvent" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                </div>

                </form>
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
                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                    </script>
                    <script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This Website is made with
                    <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href=#
                        target="_blank">Kevin-Chikhaliya</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
        </div>
    </footer>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/circleaudioplayer.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
