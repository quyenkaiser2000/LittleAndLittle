<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT DETAIL</title>
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
                                <a href="/" class="nav-item nav-link ">Trang chủ</a>
                                <a href="/event" class="nav-item nav-link active">Sự kiện</a>
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
        <div class="flag-event-left">
            <img src="{{Storage::disk('public')->url('bangron-trai.png') }}" alt="">
        </div>  
        <div class="flag-event-right">
            <img src="{{Storage::disk('public')->url('bangron-phai.png') }}" alt="">
        </div>  
        
    </head>
    <main>
        <div class="padding-br">
            
            <div class="br-main">
                
                <div class="br-event">
                    <div class="event-detail-area">
                        <div class="container">
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <h1 class="img-logo">
                                            <span>Sự kiện 1</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="padding">
                                        <div class="row border-pad">
                                            <div class="col-lg-4">
                                                <div class="card-detail">
                                                    <div class="img">
                                                        <img src="{{Storage::disk('public')->url('event-detail.png') }}" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <p class="card-text-date"><i class="fa-solid fa-calendar-days"></i> 30/05/2021 - 01/06/2021</p>
                                                        <p class="card-text">Đầm sen park</p>

                                                        <p class="card-text-price">25.000 VNĐ</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-detail">
                                                    <div class="text">
                                                        <p class="card-text"> <span class="firt-text">Lorem Ipsum</span>  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-detail">
                                                    <div class="img">
                                                        <img src="{{Storage::disk('public')->url('img-event.png') }}" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <p class="card-text">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, </p>
                                                    </div>
                                                </div>
        
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card-detail">
                                                    
                                                    <div class="text">
                                                        <p class="card-text">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, </p>
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{Storage::disk('public')->url('img-event.png') }}" alt="">
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
            </div>
        </div>
    </main>
    
</body>

</html>