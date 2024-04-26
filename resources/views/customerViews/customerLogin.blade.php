<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/png" />
    <link rel="icon" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <title>Nora Hotspot</title>
</head>
<body>
    
    <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="images/layout_img/NoraLogo(1).png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form>
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Correo</label>
                              <input type="email" name="email" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Contraseña</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Registrarse</button>
                           </div>
                           <br>
                           <br>
                           <center>
                            <label for="">Ingresa tambien por</label>
                           </center>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <center>
                                <a href="{{route('auth.redirect')}}" class="main_bt_fb"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="main_bt_ig"><i class="fa fa-instagram"></i></a>
                              </center>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
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