<?php

?>
<html>
  <head>
    <title>Crear Boletin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style></style>
  </head>
  <body>

  	<div class="container">
          <form enctype="multipar/form-data">
  		<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  		
  				<div class="form-group">
  					<label>Título:</label>
  					<input name="titulo-boletin" type="text" class="form-control" placeholder="Título del boletin">
  				</div>
          <div class="form-group">
            <label>Imagen:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
            <input name="imagen-boletin" type="file">
          </div>
  			<div class="form-group">
          <label>Cuerpo:</label>
          <textarea name="cuerpo-boletin" rows="15" class="form-control" placeholder="Cuerpo del boletin"></textarea>
        </div>

        <div class="form-group">
          <label>Categoria</label>
          <select name="categoria">
            <option></option>
          </select>
        </div>
        <div class="form-group" id ="depto">
          
          
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>

       
  		</div>
  		
  	</div>
         </form>
    </div>

  	<script type="text/javascript">
    $(function(){

          $.get("leerDeptoControlador.php",{},function(datos){

              $("#depto").html("<label>Departamento</label>" + datos );


          });

          $.get("leerCategoriaControlador.php",{},function(datos){

              $("#depto").html("<label>Departamento</label>" + datos );


          });
          


    })();

    </script>
  </body>
</html>

