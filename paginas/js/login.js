$(document).ready(function() {
	
	$email_login = $('#email_login');
	$pass_login= $('#password_login');
	$boton_login= $('#btn_login');
	
	//pulsar enter en login
	//onkeypress="javascript:if (getKeyCode(event)==13){cargarDesafioLogin();}"
	//onClick="javascript:cargarDesafioLogin();"
	

	function enviarDatos(desafio){
		console.log('enviar datos');
		console.log(desafio);
		pasword=$pass_login.val();
		pasSha= sha1(pasword);
		pasDes=pasSha.concat(desafio);
		pasDes=sha1(pasDes);
		console.log('final->');
		console.log(pasDes);
		
		
		llamar_login(pasDes);		

	}
	
	function llamar_login(datos){
		console.log('DATOS');
		console.log(datos);
		$.ajax({
		    // la URL para la petición
		    url : 'src/controlsPrivado.php',
		 
		    // la información a enviar
		    // (también es posible utilizar una cadena de datos)
		    data : { login : 'login',
		    		 e : $email_login.val(),
		    		 cc : datos
		    		},
		 
		    // especifica si será una petición POST o GET
		    type : 'POST',
		 
		    // el tipo de información que se espera de respuesta
		    dataType : 'json',
		 
		    // código a ejecutar si la petición es satisfactoria;
		    // la respuesta es pasada como argumento a la función
		    success : function(json) {
		    	console.log('resultado json, enviar datos');
		        console.log(json);
		        if(json==true){
		        	 alert('password correcto');
		        	//window.location.href = "src/controlsPrivado.php";
		        }else{
		        	console.log('password error');	
		        	alert('password NO correcto');
		        }        
		        
		    },
		 
		    // código a ejecutar si la petición falla;
		    // son pasados como argumentos a la función
		    // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
		    // de la petición y un texto con la descripción del error que haya dado el servidor
		    error : function(jqXHR, status, error) {
		    	console.log('error password');
		    	console.log(status);
		    	
		        alert('Existió un problema, intentelo más tarde. pass');
		    }
		});
	}
	
	
	function cargarDesafio(){
		//$boton.attr('disabled', 'disabled');		
		$.ajax({
		    // la URL para la petición
		    url : 'src/controlsPrivado.php',
		 
		    // la información a enviar
		    // (también es posible utilizar una cadena de datos)
		    data : { desafio : 'desafio',
		    		 e: $email_login.val()
		    		},
		 
		    // especifica si será una petición POST o GET
		    type : 'POST',
		 
		    // el tipo de información que se espera de respuesta
		    dataType : 'json',
		 
		    // código a ejecutar si la petición es satisfactoria;
		    // la respuesta es pasada como argumento a la función
		    success : function(json) {
		    	console.log('okis, pedir desafio');
		    	console.log('resultado json');
		        console.log(json);
		        alert('DESAFIO OK');
		        enviarDatos(json.des);
		        
		        
		    },
		 
		    // código a ejecutar si la petición falla;
		    // son pasados como argumentos a la función
		    // el objeto jqXHR (extensión de XMLHttpRequest), un texto con el estatus
		    // de la petición y un texto con la descripción del error que haya dado el servidor
		    error : function(jqXHR, status, error) {
		    	console.log('error pedir desafio');
		    	console.log(status);
		    	
		        alert('Existió un problema, intentelo más tarde. Pedir desafio');
		    }
		});
		
		
	}
	
	// $pass_login.keypress(function( event ) {
	  // if ( event.which == 13 ) {
	     // event.preventDefault();
	     // //cargar desafio login
	  // }
	// });
	
	$boton_login.on('click', function(e) {
	    //cargar desafio login
	    e.preventDefault();
	    console.log('se ha hecho click');
	    cargarDesafio();
	});
	

});
