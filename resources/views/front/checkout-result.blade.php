<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/dff14b3591.js" crossorigin="anonymous"></script>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="/front/style.css">
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
                                <a href="/" class="nav-item nav-link active">Trang chủ</a>
                                <a href="/event" class="nav-item nav-link ">Sự kiện</a>
                                <a href="/contact" class="nav-item nav-link">Liên hệ</a>
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
                    <div class="checkout-result-area">
                        <div class="container">
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <h1 class="img-logo">
                                            <span>Thanh toán thành công</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="position:relative;">
                                <div class="nguoi-toctim">
                                    <img src="{{Storage::disk('public')->url('1nguoi-tocnau.png') }}" alt="">
                                </div>
                                <div class="col-lg-12" style="margin-left: 60px;">
                                    <div class="padding">
                                        <div class="border-padding">
                                            <div class="autoplay">
                                                <div class="card" style="width: 330px;">
                                                    <img src="{{Storage::disk('public')->url('QR.png') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-code">ALT20210501</h5>
                                                        <p class="card-title">Vé cổng</p>
                                                        <hr>

                                                        <p class="card-text-date">Ngày sử dụng: 01/06/2021</p>

                                                        <img src="{{Storage::disk('public')->url('check.png') }}" alt=""  class="img-check">


                                                    </div>
                                                </div>
                                                <div class="card" style="width: 330px;">
                                                    <img src="{{Storage::disk('public')->url('QR.png') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-code">ALT20210501</h5>
                                                        <p class="card-title">Vé cổng</p>
                                                        <hr>

                                                        <p class="card-text-date">Ngày sử dụng: 01/06/2021</p>
                                                        <img src="{{Storage::disk('public')->url('check.png') }}" alt=""  class="img-check">



                                                    </div>
                                                </div>
                                                <div class="card" style="width: 330px;">
                                                    <img src="{{Storage::disk('public')->url('QR.png') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-code">ALT20210501</h5>
                                                        <p class="card-title">Vé cổng</p>
                                                        <p class="card-text-date">Ngày sử dụng: 01/06/2021</p>
                                                        <hr>

                                                        <img src="{{Storage::disk('public')->url('check.png') }}" alt="" class="img-check">


                                                        

                                                    </div>
                                                </div>
                                                <div class="card" style="width: 330px;">
                                                    <img src="{{Storage::disk('public')->url('QR.png') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-code">ALT20210501</h5>
                                                        <p class="card-title">Vé cổng</p>
                                                        <hr>
                                                        <p class="card-text-date">Ngày sử dụng: 01/06/2021</p>

                                                        <img src="{{Storage::disk('public')->url('check.png') }}" alt="" class="img-check">



                                                    </div>
                                                </div>
                                                <div class="card" style="width: 330px;">
                                                    <img src="{{Storage::disk('public')->url('QR.png') }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-code">ALT20210501</h5>
                                                        <p class="card-title">Vé cổng</p>
                                                        <hr>

                                                        <p class="card-text-date">Ngày sử dụng: 01/06/2021</p>

                                                        <img src="{{Storage::disk('public')->url('check.png') }}" alt="" class="img-check">


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qty-ve">
                                                <span class="text-ve">Số lượng : 12 vé</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-result">
                                        <a href="" class="btn btn-primary btn-detail">Tải vé</a>
                                        <a href="" class="btn btn-primary btn-detail">Gửi Email</a>
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

        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
        });

    </script>
</html>