<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

  
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
                                <a href="/" class="nav-item nav-link ">Trang chủ</a>
                                <a href="/event" class="nav-item nav-link">Sự kiện</a>
                                <a href="/contact" class="nav-item nav-link active">Liên hệ</a>
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
                
                <div class="contact-area">
                    <div class="container">
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="logo">
                                        <h1 class="img-logo">
                                            <span>Liên hệ</span>
                                        </h1>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="position:relative;padding-left: 50px !important;margin-right: -90px !important;">
                            <div class="nguoi-toctim">
                                <img src="{{Storage::disk('public')->url('1nguoi-tocdo.png') }}" alt="">
                            </div>
                            <div class="col-lg-7 padding">
                                
                                <div class="border-padding">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. </p>
                                        <form action="{{ route('sendmail') }}" method="POST">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên" required>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <textarea name="message" id="message" placeholder="Lời nhắn"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row button">
                                                    <div class="col-lg-12" style="text-align: center;">
                                                        <button type="submit">Gửi liên hệ</button>
                                                    </div>
                                                </div>
                                        </form>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 padding-contact">
                                <div class="border-pad">
                                    <div class="address">
                                        <div class=" row ">
                                            <div class="col-lg-2">
                                                <img src="{{Storage::disk('public')->url('icon-adress.png') }}" alt="">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="text-label">Địa chỉ</p>
                                                <p class="text">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-pad">
                                    <div class="email">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <img src="{{Storage::disk('public')->url('icon-email.png') }}" alt="">
                                                </div>
                                                <div class="col-lg-10">
                                                    <p class="text-label">Email</p>
                                                    <p class="text">investigate@your-site.com</p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                               <div class="border-pad">
                                    <div class="phone">
                                            <div class=" row ">
                                                <div class="col-lg-2">
                                                    <img src="{{Storage::disk('public')->url('icon-phone.png') }}" alt="">

                                                </div>
                                                <div class="col-lg-10">
                                                    <p class="text-label">Điện thoại</p>
                                                    <p class="text">+84 145 689 798</p>
                                                </div>
                                        
                                            </div>
                                    </div>
                                    
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