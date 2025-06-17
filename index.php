<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/rodeio.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <nav class="teal darken-4">
	    
  	</nav>
	<div class="had-container">
	     <div class="parallax-container logueo">
      	<div class="parallax"><img src="imagens/fundo.png" height="800px"></div>
      	<div class="row"><br>
      		<div class="col m8 s8 offset-m2 offset-s2 center">
      			<h4 class="truncate bg-card-user">
					  <div class="row login">
					  	<h4>Iniciar Sessão</h4>
					    <form class="col s12" method="POST" action="login.php">
					      <div class="row">
					         <div class="input-field col m12 s12">
					          <i class="material-icons iconis prefix">account_box</i>
					          <input id="icon_prefix" type="text" class="validate" name="usuario">
					          <label for="icon_prefix">Usuário/Email</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col m12 s12">
					          <i class="material-icons iconis prefix">enhanced_encryption</i>
					          <input id="password" type="password" class="validate" name="senha">
					          <label for="password">Senha</label>
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
    

    </div> <!-- fin del .container -->

<footer class="page-footer teal darken-4">
    <div class="footer-copyright">
        <div class="container center">
        	Copyright © 2025 - JoaoDias
        </div>
    </div>
</footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
  </body>
</html>

<script>
    	$(document).ready(function(){
    		$('.button-collapse').sideNav({
		      menuWidth: 300, // Default is 300
		      edge: 'left', // Choose the horizontal origin
		      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		      draggable: true, // Choose whether you can drag to open on touch screens,
		      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
		      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
		    }
		  );
      		$('.parallax').parallax();
    	});
</script>