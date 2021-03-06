<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading">Sequência de Fibonacci </h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Tente você mesmo</h2>
                <p>Digite abixo números aleatórios e veja quantos números se encaixam e qual suas posições correta na
                    sequência!</p>
            </div>
            <form action="calcular" method="post">

                <div class="form-group">
                    @csrf
                    <input type="text" class="form-control" id="numeros" name="dados"
                           placeholder="Digite os números separados por virgula!">

                </div>
                <button type="submit" class="btn btn-primary">Verificar</button>

            </form>
        </div>

    </div>
</div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('input[type="text"]').each(function(){
            var val = $(this).val().replace('.',',');
            $(this).val(val);
        });
    });
</script>
<style>
    body#LoginForm {
        background-image: url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding: 10px;
    }

    .form-heading {
        color: #fff;
        font-size: 23px;
    }

    .panel h2 {
        color: #444444;
        font-size: 18px;
        margin: 0 0 8px 0;
    }

    .panel p {
        color: #777777;
        font-size: 14px;
        margin-bottom: 30px;
        line-height: 24px;
    }

    .login-form .form-control {
        background: #f7f7f7 none repeat scroll 0 0;
        border: 1px solid #d4d4d4;
        border-radius: 4px;
        font-size: 14px;
        height: 50px;
        line-height: 50px;
    }

    .main-div {
        background: #ffffff none repeat scroll 0 0;
        border-radius: 2px;
        margin: 10px auto 30px;
        max-width: 38%;
        padding: 50px 70px 70px 71px;
    }

    .login-form .form-group {
        margin-bottom: 10px;
    }

    .login-form {
        text-align: center;
    }

    .forgot a {
        color: #777777;
        font-size: 14px;
        text-decoration: underline;
    }

    .login-form .btn.btn-primary {
        background: #f0ad4e none repeat scroll 0 0;
        border-color: #f0ad4e;
        color: #ffffff;
        font-size: 14px;
        width: 100%;
        height: 50px;
        line-height: 50px;
        padding: 0;
    }

    .forgot {
        text-align: left;
        margin-bottom: 30px;
    }

    .botto-text {
        color: #ffffff;
        font-size: 14px;
        margin: auto;
    }

    .login-form .btn.btn-primary.reset {
        background: #ff9900 none repeat scroll 0 0;
    }

    .back {
        text-align: left;
        margin-top: 10px;
    }

    .back a {
        color: #444444;
        font-size: 13px;
        text-decoration: none;
    }

</style>
