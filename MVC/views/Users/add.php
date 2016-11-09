<!-- Vista para añadir-->
<form action="<?php echo APP_URL; ?>users/add"  method="POST">
     <h2 class="center-align">Registro</h2>
      
	<p>
	<label for="username">Usuario</label>
	   </p>
	   <p>
	   	<input id="username" type="text" class="validate" name="username">
	   </p>
	   	
    <p><label for="password" >Contraseña</label>
    </p>
    <p>
    	<input id="password" type="password" name="password" class="validate">
    </p>
   	<p>
        <button  type="submit" name="add" value="save">Enviar
    </button>
 </p>

</form>
