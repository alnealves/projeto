<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/css.css" rel="stylesheet" type="text/css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

		<title>Login</title>
	</head>
	<body>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Acesso ao Sistagio</h4>
            <input type="text" id="userName" name="login" class="form-control input-sm chat-input" placeholder="login" />
            </br>
            <input type="text" id="userPassword" name="senha" class="form-control input-sm chat-input" placeholder="senha" />
            </br>
            <div class="wrapper">
                {{csrf_field()}}
            <span class="group-btn" type='submit'>  
                
                <a href="{{route('administrador.login')}}" class="btn btn-primary btn-md">Entrar <i class="fa fa-sign-in"></i></a>
            </span>
                <span class="group-btn">     
                <a href="{{route('administrador.create')}}" class="btn btn-primary btn-md">Cadastrar <i class="fa fa-plus" aria-hidden="true"></i></a>
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
