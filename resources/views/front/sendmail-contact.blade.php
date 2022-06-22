<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<base href="{{ asset('/') }}">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body style="margin: 0;
padding: 0;
box-sizing: border-box;background-color: bisque;">
    <div class="header">
        <div class="container">
            <h1 style="    display: flex;
    color: currentcolor;
    font-size: 50px;
    width: 400px;
    margin: 0px auto;
    padding-top: 35px;">LITTLE AND LITTLE</h1>

        </div>
    </div>
    <div style="width: 100%; height:300px;background-color:floralwhite">
        <div  class="container">
            <h2 style="margin-top:50px;padding-top:50px;font-size: 30px;padding-left: 50px;">Thông Tin Người Liên Hệ</h2>
            <div class="row" style="    display: flex;
    justify-content: space-around;font-size: 18px;">
                <div class="col-6 col-sm-6" style="display:block;">
                    <span style="display:block;margin: 20px 20px;">Tên : {{$contact->name}}</span>
                    <a href="mailto:{{$contact->email}}" style="display:block;margin: 20px 20px; color:var(--bs-body-color);">Email : {{$contact->email}}</a>
                </div>
                <div class="col-6 col-sm-6">
                    <span style="display:block;margin: 20px 20px;">SĐT : {{$contact->phone}}</span>
                    <span style="display:block;margin: 20px 20px;">Địa chỉ:  {{$contact->address}}</span>
                </div>

            </div>

        </div>


    </div>
    <div class="container" style="margin-top: 20px;
    margin-bottom: 20px;">
        <h4 style="margin-top:50px;font-size: 30px;padding-left: 50px;">Lời Nhắn</h4>
        <p name="message" id="message" style="width:1300px; height:300px;">{{$contact->message}}</p>
    </div>
    
    

</body>

</html> 