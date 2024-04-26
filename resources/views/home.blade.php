<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/png" />
    <link rel="icon" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('dashboard')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('topbar')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">

                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">2500</p>
                                    <p class="head_couter">Usuarios</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">123.50</p>
                                    <p class="head_couter">Usuarios Activos</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row column1 social_media_section">
                        <div class="col-md-6 col-lg-3">
                           
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons fb margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-facebook"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>584k</strong></span>
                                       <span>Usuarios</span>
                                    </li>
                                    <li>
                                       <span><strong>978</strong></span>
                                       <span>Activos</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full socile_icons ig margin_bottom_30">
                              <div class="social_icon">
                                 <i class="fa fa-instagram"></i>
                              </div>
                              <div class="social_cont">
                                 <ul>
                                    <li>
                                       <span><strong>758+</strong></span>
                                       <span>Contacts</span>
                                    </li>
                                    <li>
                                       <span><strong>365</strong></span>
                                       <span>Feeds</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- graph -->
                     <!-- end graph -->
                  </div>
                  <!-- footer -->
                  @include('footer')
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/animate.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <script src="{{asset('js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/utils.js')}}"></script>
    <script src="{{asset('js/analyser.js')}}"></script>
    <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/chart_custom_style1.js')}}"></script>
</body>
</html>