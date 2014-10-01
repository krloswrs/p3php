<DOCTYPE !html>
        <head>
        <title>Formulario</title>
        </head>
         <body >
	<div>
	       <form action="factura.php" method="GET	">
		<fieldset>
		<legend>productos</legend>
		<tr>
	       <th>Cantidad</th>
  	       <th>Productos</th>
 	       <th>Precio</th>
	       </tr>
	       <br/>
	       <br/>
		    
		         <input type="text" size="5" maxlength="225" id="txtNombre" name="cantidad1" />
		    		    
		        <input type="text" size="10" maxlength="225" id="txtCorreo" name="producto1" />
		    
		        <input type="text" size="10" maxlength="225" id="txtPass" name="precio1" /> 
	       <br/>
	       <br/>    
		        <input type="text" size="5" maxlength="225" id="txtNombre" name="cantidad2" />
		    		    
		        <input type="text" size="10" maxlength="225" id="txtCorreo" name="producto2" />
		    
		        <input type="text" size="10" maxlength="225" id="txtPass" name="precio2" />    
	       <br/>
	       <br/>    
     		        <input type="text" size="5" maxlength="225" id="txtNombre" name="cantidad3" />
		    		    
		        <input type="text" size="10" maxlength="225" id="txtCorreo" name="producto3" />
		    
		        <input type="text" size="10" maxlength="225" id="txtPass" name="precio3" /> 
		</fieldset>
			<input type="submit" name="enviar" value="enviar" />
	   
	</div>
        </body>
</html>