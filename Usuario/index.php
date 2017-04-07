<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <script>
	function mensaje()
	{
	var a= document.getElementById('cuadro2');
	longitud=(a.value.length)
        if(longitud>7){
            return 1;
           
        }
        alert ("la clave tiene que ser mayor de 7 caracteres");    
        return 0;
	}
</script>
<style>
.centrado{
    position: relative;
    top: 300px;
    left: 800px;
}
#boton{
border: 5px solid powderblue;
}
#cuadro1{
background-color:red;
border: 2px solid powderblue;
font-size: 15px;
}
#cuadro2{
background-color:red;
border: 2px solid powderblue;
font-size: 15px;
}
#letras{
font-size: 18px;
font-family:arial;
}
</style>
<form onsubmit="return mensaje()" action="procesar.php">
    
<div class="centrado">
<label id="letras">Nombre: </label> 
<input type="text" name="nombre" id="cuadro1"><br><br>
</div>
<div class="centrado">
<label id="letras">Clave: </label> 
<input type="password" name="clave" id="cuadro2"><br><br>
</div>
<div class="centrado">
 <input type="submit" value="Aceptar" class="cuadro" id="boton">
</div>
</form>  
      
  </body>
</html>
