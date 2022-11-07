<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>input{color: white;}</style>

    <script>
		
function modificarBD(acao) {
   let json = {}
   json.nome = document.getElementById('nome').value
   json.email = document.getElementById('email').value
   json.senha = document.getElementById('senha').value
   json.acao = acao

if ((json.nome=="" || json.email=="" || json.senha=="") && acao!="deletar"){
	alert("Preencha os campos: Nome Email Senha !!!!!");
	return;
	}

   $.ajax({
    url: 'cadastro.php',
    data: json,
    type: 'get',
    success: resp => {
      alert(resp);
    }
   })

   
}

</script>




    <link rel="shortcut icon" href="imgem/pomodoro.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand font-weight-bold text-white" href="index.php"> <img src="./imgem/logo_test_3.jpg"></a>
    </nav>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo de volta!</h2>
                <p class="description description-primary">Para se conectar</p>
                <p class="description description-primary">entre em sua conta</p>
                <button id="signin" class="btn btn-primary" style="background-color: #DF3414 ;">Entrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Crie sua conta</h2>

               <!-- <p class="description description-second">or use your email for registration:</p> -->
                <form class="form">
                    <label class="label-input text-white" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input id="nome" type="text" name="username" placeholder="Usuário" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="senha" type="password" name="password" placeholder="Senha" required>
                    </label>


                    <button id="btn-submit" class="btn btn-second" onClick="modificarBD('inserir')">Registrar</button>

                </form>

                <!--   
	
			<input type="text" id="nome"><br><br>

			<input type="email" id="email"><br><br>

			<input type="password" id="senha"><br><br>

			<input type="button" class="botao" value="Cadastrar" onClick="modificarBD('inserir')">


		</form>
                -->
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo(a)</h2>
                <p class="description description-primary">Entre com seus dados</p>
                <p class="description description-primary">para utilizar o Timer Pomodoro</p>
                <button id="signup" class="btn btn-primary" style="background-color: #DF3414 ;">Registrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Entre em sua conta</h2>
                <!-- social media -->
                
                <form action="validar.php" method="post" class="form">
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </label>

                    <button class="btn btn-second" >Entrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="./js/login.js"></script>
</body>
</html>



























































<!--<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="cadastro.css">
	
	</head>
<style>
*{
margin: 0;
padding: 0;
}

body{
    background: blueviolet;
}

h2{

}

</style>


	<body>

	<h2>Bem vindo ao APP POMODORO faça seu login!!!</h2>


		<form action="validar.php" method="post">

			<label for="email">Email</label><br>
			<input type="text" name="email" required><br><br>

			<label for="senha">Senha</label><br>
			<input type="password" name="senha" required><br><br>

			<input type="submit" value="Entrar">

		</form>

		<br><br>
		<a href="cadastro.html">Não Possui Cadastro? Cadastre-se</a>

	</body>

</html>
-->