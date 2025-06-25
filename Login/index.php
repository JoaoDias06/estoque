<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<style>
		footer {
            position: absolute; 
            bottom: 0; 
            width: 100%;
            z-index: 99;
        }
		i {
			margin-top: 10px;
		}
		label {
			padding-top: 28px;
		}
	</style>
	<title>Login</title>
</head>

<body>
	<nav class="teal darken-4">

	</nav>
	<div class="had-container">
		<div class="logueo">
			<div class="row"><br>
				<div class="col m8 s8 offset-m2 offset-s2 center">
					<h4 class="bg-card-user">
						<div class="row login">
							<h2>Iniciar Sessão</h2>
							<form class="col s12" method="POST" action="login.php">
								<div class="row">
									<div class="input-field col m8 offset-m2 s12">
										<i class="material-icons iconis prefix">account_box</i>
										<input id="icon_prefix" type="text" class="validate" name="usuario">
										<label for="icon_prefix">Usuário</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col m8 s12 offset-m2">
										<i class="material-icons iconis prefix">enhanced_encryption</i>
										<label for="password">Senha</label>
										<input id="password" type="password" class="validate" name="senha">
									</div>
								</div>
								<div class="row">
									<button class="btn waves-effect waves-light teal darken-4" type="submit" name="action">Iniciar Sessão!</button>
								</div>
							</form>
						</div>
					</h4>
				</div>
			</div>
		</div>
	</div>


	</div>

	<footer class="page-footer teal darken-4">
		<div class="footer-copyright">
			<div class="container center">
				Copyright © 2025 - JoaoDias
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="mySpxript.js"></script>
</body>

</html>