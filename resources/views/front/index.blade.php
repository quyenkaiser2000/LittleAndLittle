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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

  
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
        <div class="khicau-vangdo">
            <img src="{{Storage::disk('public')->url('khicau_vangdo.png') }}" alt="">
        </div>  
        
    </head>
    <main>
        <div class="khicau-xanh">
                <img src="{{Storage::disk('public')->url('khicau_xanh.png') }}" alt="">
        </div>
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
                        <div class="row" style="position:relative;">
                            <div class="nguoi-toctim">
                                <img src="{{Storage::disk('public')->url('1nguoi_tochong.png') }}" alt="">
                            </div>
                            <div class="khicau-do">
                                <img src="{{Storage::disk('public')->url('khicau_do.png') }}" alt="">
                            </div>
                            
                            <div class="khicau-tim">
                                <img src="{{Storage::disk('public')->url('khicau_tim.png') }}" alt="">
                            </div>
                            <div class="for-nguoi">
                                <img src="{{Storage::disk('public')->url('4nguoi.png') }}" alt="">
                            </div>
                            <div class="khicau-xanhnho">
                                    <img src="{{Storage::disk('public')->url('khicau_xanhnho.png') }}" alt="">
                            </div>
                            <div class="khicau-tim-2">
                                    <img src="{{Storage::disk('public')->url('khicau_tim.png') }}" alt="">
                            </div>
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
                                <div class="panner-ve">
                                    <span class="img-panner">Vé của bạn</span>
                                </div>
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
                                                    <input type="text" class="form-control" id="soluong" name="soluong" placeholder="Số lượng vé" required>
                                                
                                            </div>
                                            <div class="col-lg-7" style="position:relative;">
                                                    
                                                <div id="datepicker" class=" date inputdate" data-date-format="mm-dd-yyyy">
                                                    <input class="form-control" type="text" readonly placeholder="Ngày sử dụng" required />
                                                    <span class="input-group-addon icondate"><img src="{{Storage::disk('public')->url('calendar.png') }}" alt=""></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ email" required>
                                            </div>
                                        </div>
                                        <div class="row button">
                                            <div class="col-lg-12">
                                                <button type="submit">Đặt vé</button>
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

        $(function () {
            $("#datepicker").datepicker({ 
                    autoclose: true, 
                    todayHighlight: true
            });
        });

    </script>
</html>