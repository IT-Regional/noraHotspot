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
                    <br>
                    <br>
                    <br>
                     <div class="row column_title">
                     </div>
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Usuarios Activos</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Age</th>
                                             <th>City</th>
                                             <th>Country</th>
                                             <th>Sex</th>
                                             <th>Example</th>
                                             <th>Example</th>
                                             <th>Example</th>
                                             <th>Example</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>1</td>
                                             <td>Anna</td>
                                             <td>Pitt</td>
                                             <td>35</td>
                                             <td>New York</td>
                                             <td>USA</td>
                                             <td>Female</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                          </tr>
                                          <tr>
                                             <td>111</td>
                                             <td>Anna</td>
                                             <td>Pitt</td>
                                             <td>35</td>
                                             <td>New York</td>
                                             <td>USA</td>
                                             <td>Female</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                          </tr>
                                          <tr>
                                             <td>1</td>
                                             <td>Anna</td>
                                             <td>Pitt</td>
                                             <td>35</td>
                                             <td>New York</td>
                                             <td>USA</td>
                                             <td>Female</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                             <td>Yes</td>
                                          </tr>
                                       </tbody>
                                    </table>
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