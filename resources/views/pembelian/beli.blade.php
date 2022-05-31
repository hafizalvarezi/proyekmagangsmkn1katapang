<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
</head>

<body>
    <center>
        <style>
            html {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background: linear-gradient(#141e30, #243b55);
            }

            .login-box {
    position: absolute;
    top: 320px;
    color: white;
    left: 700px;
    width: 400px;
    height: 600px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgb(0 0 0 / 60%);
    border-radius: 10px;
}


            .login-box h2 {
                margin: 0 0 30px;
                padding: 0;
                color: #fff;
                text-align: center;
            }

            .login-box .user-box {
                position: relative;
            }

            .login-box .user-box input {
                width: 100%;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                margin-bottom: 30px;
                border: none;
                border-bottom: 1px solid #fff;
                outline: none;
                background: transparent;
            }

            .login-box .user-box label {
                position: absolute;
                top: 0;
                left: 0;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                pointer-events: none;
                transition: .5s;
            }

            .login-box .user-box input:focus~label,
            .login-box .user-box input:valid~label {
                top: -20px;
                left: 0;
                color: #03e9f4;
                font-size: 12px;
            }

            .login-box form a {
                position: relative;
                display: inline-block;
                padding: 10px 20px;
                color: white;
                font-size: 16px;
                text-decoration: none;
                text-transform: uppercase;
                overflow: hidden;
                transition: .5s;
                margin-top: 40px;
                letter-spacing: 4px
            }

            .login-box a:hover {
                background: #03e9f4;
                color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 100px #03e9f4;
            }

            .login-box a span {
                position: absolute;
                display: block;
            }

            .login-box a span:nth-child(1) {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #03e9f4);
                animation: btn-anim1 1s linear infinite;
            }

            @keyframes btn-anim1 {
                0% {
                    left: -100%;
                }

                50%,
                100% {
                    left: 100%;
                }
            }

            .login-box a span:nth-child(2) {
                top: -100%;
                right: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(180deg, transparent, #03e9f4);
                animation: btn-anim2 1s linear infinite;
                animation-delay: .25s
            }

            @keyframes btn-anim2 {
                0% {
                    top: -100%;
                }

                50%,
                100% {
                    top: 100%;
                }
            }

            .login-box a span:nth-child(3) {
                bottom: 0;
                right: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(270deg, transparent, #03e9f4);
                animation: btn-anim3 1s linear infinite;
                animation-delay: .5s
            }

            @keyframes btn-anim3 {
                0% {
                    right: -100%;
                }

                50%,
                100% {
                    right: 100%;
                }
            }

            .login-box a span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #03e9f4);
                animation: btn-anim4 1s linear infinite;
                animation-delay: .75s
            }

            @keyframes btn-anim4 {
                0% {
                    bottom: -100%;
                }

                50%,
                100% {
                    bottom: 100%;
                }
            }
            input{
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgb(255 255 255 / 7%);
            border-radius: 12px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
            color: white;
            }
            .button:hover{
                color: #fff;
            }
        </style>
<div class="login-box">
    <h2>Pesanan Anda</h2>
    <form action="{{route('simpan')}}" method ="post"> 
    {{csrf_field() }}
    Menu : {{$menu->nama}}
    Harga : {{$menu->harga}}
    <br>
        <tr>
                <td>No :  <input type="text" name="uploadgambar_id" value="{{$menu->id}}"></td>
            </tr>
<br>



<br>
        <tr>
            <td>Nama</td>
<br>
            <input type="text" name="nama_pembeli" placeholder="Masukan Nama" required>
        </tr>
<br>
        <tr>
            <td>Alamat</td>
<br>
            <input type="text" name="alamat" placeholder="Masukan Alamat" required>
        </tr>
<br>
        <a href="{{route('shop')}}">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button class="button" type="submit" style="background: none;border: none;color: white;font-family: cursive;">Checkout</button>
        </a>
        <h4>
        <a href="{{route('shop')}}">back
        </h4>
        </a>
    </form>
</div>
