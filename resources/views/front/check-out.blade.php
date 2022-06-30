<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
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
                                <a href="/event" class="nav-item nav-link">Sự kiện</a>
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
                
                <div class="checkout-area">
                    <div class="container">
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="logo">
                                    <h1 class="img-logo">
                                        <span>Thanh toán</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="position:relative;">
                            <div class="nguoi-toctim">
                                <img src="{{Storage::disk('public')->url('1nguoi-tocvang.png') }}" alt="">
                            </div>
                            <form action="/checkout" style="display:flex;" method="post">
                                @csrf
                                <input type="text" class="form-control" id="id" name="id" value="{{$id}}" required style="display:none;">

                                <div class="col-lg-7 padding">
                                    <div class="panner-ve">
                                        <span class="img-panner">VÉ CỔNG - VÉ GIA ĐÌNH</span>
                                    </div>
                                    <div class="border-padding borderpadding-left">
                                            <div class="row" style="margin-top: 15px;">
                                                <div class="col-lg-4" style="margin-right:28px;">
                                                    <label for="money">Số tiền thanh toán</label>
                                                    <input type="text" class="form-control" id="money" name="money" value="{{$money}}" required>
                                                </div>
                                                <div class="col-lg-3" style="margin-right:28px;">
                                                    <label for="qty">Số lượng vé</label>
                                                    <div class="" style="display:flex;">
                                                        <input type="text" class="form-control" id="qty" name="qty" value="{{$soluong}}" required >
                                                        <span class="ve">vé</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="date">Ngày sử dụng</label>
                                                    <input type="text" class="form-control" id="date" name="date" value="{{$date}}" required >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <label for="name">Thông tin liên hệ</label>
                                                    <input type="text" class="form-control" id="name" name="nam" value="{{$name}}"  >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <label for="phone">Điện thoại</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$phone}}" required >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{$email}}" required >
                                                </div>
                                            </div>
                                    </div>
                                    <div class=" mid">
                                        <img src="{{Storage::disk('public')->url('page-thanhtoan.png') }}" alt="" style="width: 141px;height: 640px;">
                                    </div>
                                </div>
                            
                                <div class="col-lg-4 padding">
                                    <div class="panner-ve">
                                        <span class="img-panner">THÔNG TIN THANH TOÁN</span>
                                    </div>
                                    <div class="border-padding form">
                                            <div class="row" style="margin-top:15px;">
                                                <div class="col-lg-12">
                                                    <label for="numbercard">Số thẻ</label>
                                                    <input type="text" class="form-control" id="numbercard" name="numbercard" placeholder="Số thẻ" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <label for="name">Họ tên chủ thẻ</label>

                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên chủ thẻ" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12" style="position:relative;">
                                                    
                                                    <div id="datepicker" class=" date inputdate" data-date-format="mm-dd-yyyy">
                                                        <label for="date">Ngày hết hạn</label>
                                                        <input class="form-control" type="text" id="date" readonly placeholder="Ngày sử dụng"  />
                                                        <span class="input-group-addon icondate"><img src="{{Storage::disk('public')->url('calendar.png') }}" alt=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <label for="name">CVV/CVC</label>
                                                    <input type="password" class="form-control cvv" id="cvv" name="cvv" placeholder="CVV/CVC" >
                                                </div>
                                            </div>
                                            
                                    </div>
                                </div>
                                <div class="row button-thanhtoan">
                                    <div class="col-lg-12">
                                        <button type="submit" class="submit-thanhtoan">Thanh toán</button>
                                    </div>
                                </div>
                            </form>
                            
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