<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="front/style.css">
</head>
<body>

    <head>
        <div class="br-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a href="#" class="navbar-brand">
                            <img src="{{Storage::disk('public')->url('logo.png') }}" alt="">
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav center">
                                <a href="#" class="nav-item nav-link active">Trang chủ</a>
                                <a href="#" class="nav-item nav-link">Sự kiện</a>
                                <a href="#" class="nav-item nav-link">Liên hệ</a>
                            </div>
                            <div class="navbar-nav ms-auto phone">
                                <a href="#" class="nav-item nav-link"><i class="fa fa-solid fa-phone"></i>0123456789</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </head>
    <main>
        <div class="padding-br">
            <div class="br-main">
                <div class="logo-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="logo">
                                    <h1 class="img-logo">
                                        <img src="{{Storage::disk('public')->url('logo_damsen.png') }}" alt="">
                                        <span>Đầm sen <br> park</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 padding">
                                <div class="border-padding">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</p>
                                        <p>Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.</p>
                                        <ul>
                                            <li>
                                                <img src="{{Storage::disk('public')->url('start.png') }}" alt="">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </li>
                                            <li>
                                                <img src="{{Storage::disk('public')->url('start.png') }}" alt="">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </li>
                                            <li>
                                                <img src="{{Storage::disk('public')->url('start.png') }}" alt="">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </li>
                                            <li>
                                                <img src="{{Storage::disk('public')->url('start.png') }}" alt="">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </li>
                                        </ul>
                                </div>
                                <div class=" mid">
                                    <img src="{{Storage::disk('public')->url('page-thanhtoan.png') }}" alt="" style="width: 141px;height: 538px;">
                                </div>
                            </div>
                            
                            <div class="col-lg-4 padding">
                                <div class="border-padding form">
                                    <form action="#">
                                        <div class="row padding-icon">
                                            <div class="col-lg-12">
                                                <select class="js-example-basic-single" name="state">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                    <input type="text" class="form-control" id="soluong" name="soluong" placeholder="Số lượng vé">
                                                
                                            </div>
                                            <div class="col-lg-7">
                                                    <input type="text" name='datepicker' class="form-control"  value="Select date" id="datepicker" ng-required="true" placeholder="MM/DD/YYYY" >
                                                    <span class="fa fa-calendar"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
<script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $(document).ready(function() {
  $("#datepicker").datepicker();
  $('.fa-calendar').click(function() {
    $("#datepicker").focus();
  });
});
    </script>
</html>