<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

    <title>Event-list</title>
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
                                <li class="has-children">
                                    <a href="event-list">MyEvent</a>
                                    <ul class="dropdown arrow-top">
                                        <li>
                                            <a href="createevent">CreateEvent</a>
                                        </li>
                                        <li>
                                            <a href="events">AllEvent</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="event-list">{{session('user')}}</a>
                                    <ul class="dropdown ">
                                        <li>
                                            <a href="logout">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact">Contact</a></li>
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

                    <h1 class="text-white">MYEVENTs</h1>

                </div>
            </div>
        </div>
    </div>


    <!-- Dashboard Contents -->
   
            {{-- <div class="col-lg-3 col-md-3">
                    <div class="list-group small">
                        <div class="list-group-item active font">Event-Data</div>
                        <a href="#add_event" class="list-group-item" data-toggle="modal" data-target="#add_event">Add Event</a>
                        <a href="event-list" class="list-group-item">View all Events</a>
                        <a href="event-list" class="list-group-item">View all Students</a>
                    </div>
                </div> --}}
            <div class="site-section">
                <div class="container">
                    <div class="row">
                        @foreach($data as $item)
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <a href="single/{{$item->id}}"><img src="storage/event_posters/{{$item->EventPoster}}"
                                    alt="Event Poster" class="img-fluid"></a>
                            <div class="p-4 bg-white">
                                <span class="d-block text-secondary small text-uppercase">Date: {{$item->Eventdate}}
                                    <br> Time:{{$item->EventTime}}</span>
                                <h2 class="h5 text-black mb-3"><a href="single/{{$item->id}}">{{$item->EventName}}</a>
                                </h2>
                                <a href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal"
                                    data-target="#{{$item->id}}">Details</a>
                                <a href="#" class="btn btn-warning btn-sm btn-block" data-toggle="modal"
                                    data-target="#edit{{$item->id}}">edit</a>
                                <a href="delete\{{$item->id}}" class="btn btn-danger btn-sm btn-block"
                                    onclick="confirm('Are you sure you want to delete?')">Delete</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


            </div>

            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <table class="table table-striped table-hover bg-light small">
                            <tr class="table-dark text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($data as $item)
                            <tr class="text-center">
                                <td>{{$item->id}}</td>
            <td>{{$item->EventName}}</td>
            <td><a href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal"
                    data-target="#{{$item->id}}">Details</a></td>
            <td><a href="#" class="btn btn-warning btn-sm btn-block" data-toggle="modal"
                    data-target="#edit{{$item->id}}">edit</a></td>
            <td><a href="delete\{{$item->id}}" class="btn btn-danger btn-sm btn-block"
                    onclick="confirm('Are you sure you want to delete?')">Delete</a></td>
            </tr>
            @endforeach
            </table>
        </div>
    </div>
    </div> --}}

  
    <!-- Dashboard Contents -->
    <!-- Button trigger modal -->


    <!-- Add Event Modal -->
    {{-- <div class="modal fade" id="add_event" tabindex="-1" role="dialog" aria-labelledby="add_event" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_event">Add Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="event-list" enctype="multipart/form-data">
          @csrf
              <div class="mb-3">
                  <input type="text" name='EventName' class="form-control form-control-sm" placeholder="Event-Name" required>
              </div>
              <div class="mb-3">
                <input type="text" name='Eventplace' class="form-control form-control-sm" placeholder="Event-place" required>
            </div>
            <div class="mb-3">
                <input type="text" name='EventCordinator' class="form-control form-control-sm" placeholder="Event-Cordinator-Name" required>
            </div>
            <div class="mb-3">
                <input type="email" name='email' class="form-control form-control-sm" placeholder="Event-Cordinator-email" required>
            </div>
            <div class="mb-3">
              <textarea id="w3review" name="w3review" rows="4" cols="48" placeholder="Event-Discription"></textarea>
                <!-- <input type="text" name='Discription' class="form-control form-control-sm" placeholder="Event-Discription" required> -->
            </div>
            <div class="mb-3">
                <input type="date" name='date' class="form-control form-control-sm" placeholder="Event-date" required>
            </div>
            <div class="mb-3">
            <input type="time" name='time' class="form-control form-control-sm" placeholder="Event-time" required>
            </div>
            <div class="mb-3">
                <select class="form-control form-control-sm" name='eventType'>
                    <option value="Technical-Event">Technical-Event</option>
                    <option value="Non-Technical-Event">Non-Technical-Event</option>
                    <option value="Gaming-Event">Gaming-Event</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control form-control-sm" name="poster" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success btn-sm">Add-Event</button>
        </div>
        </form>
      </div>
    </div>
  </div> --}}
    <!--Add Event Modal -->

    <!-- info modal -->
    @foreach ($data as $item)
    <div class="modal fade" id="{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$item->id}}"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{$item->id}}">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <div align="center" class="mt-1 mb-1">
                    <img src="storage/event_posters/{{$item->EventPoster}}" alt="Event" width="225" height="160">
                </div>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>{{$item->id}}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{$item->EventName}}</td>
                    </tr>
                    <tr>
                        <td>Event-type</td>
                        <td>{{$item->EventType}}</td>
                    </tr>
                    <tr>
                        <td>Event-Cordinator</td>
                        <td>{{$item->EventCordinator}}</td>
                    </tr>
                    <tr>
                        <td>Event-Cordinator-email</td>
                        <td>{{$item->EventCordinatorEmail}}</td>
                    </tr>
                    <tr>
                        <td>Event-place</td>
                        <td>{{$item->Eventplace}}</td>
                    </tr>
                    <tr>
                        <td>Event-Discription</td>
                        <td>{{$item->EventDescription}}</td>
                    </tr>
                    <tr>
                        <td>Event-Date</td>
                        <td>{{$item->Eventdate}}</td>
                    </tr>
                    <tr>
                        <td>Event-time</td>
                        <td>{{$item->EventTime}}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    @endforeach
    <!-- info modal -->

    <!-- edit modal -->
    @foreach ($data as $item)
    <div class="modal fade" id="edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="edit{{$item->id}}"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit{{$item->id}}">Edit Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="edit-event-list" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="font-weight-bold">EventName</label>
                            <input type="text" name="EventName" value={{$item->EventName}}
                                class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">EventPlace</label>
                            <input type="text" name="Eventplace" value={{$item->Eventplace}}
                                class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">EventCordinator</label>
                            <input type="text" name="EventCordinator" value={{$item->EventCordinator}}
                                class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">EventCordinatorEmail</label>
                            <input type="email" name="EventCordinatorEmail" value={{$item->EventCordinatorEmail}}
                                class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">EventDetails</label>
                            <input type="textarea" name="EventDescription" value={{$item->EventDescription}}
                                class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">Eventdate</label>
                            <input type="date" name="Eventdate" value={{$item->Eventdate}}
                                class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">EventTime</label>
                            <input type="time" name="EventTime" value={{$item->EventTime}}
                                class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">Eventtype</label>
                            <select class="form-control form-control-sm" name='eventType'>
                                <option value={{$item->EventType}} selected>{{$item->EventType}}</option>
                                <option value="Technical-Event">Technical-Event</option>
                                <option value="Non-Technical-Event">Non-Technical-Event</option>
                                <option value="Gaming-Event">Gaming-Event</option>
                            </select>
                        </div>
                        <label class="font-weight-bold">EventPoster</label>
                        <div class="mb-3">
                            <td align="center"><img src="/storage/event_posters/{{ $item->EventPoster}}" alt="Event"
                                    width="250" height="160"></td>
                            <td align="center"><input type="file" name="poster"></td>
                            <input type="hidden" name="id" value="{{$item->id}}">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm">Edit-Event</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <div class="bg-primary" data-aos="fade">
        <div class="container">
            <div class="row">
                <a href="#" class="col-2 text-center py-4 social-icon d-block"><span
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
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
