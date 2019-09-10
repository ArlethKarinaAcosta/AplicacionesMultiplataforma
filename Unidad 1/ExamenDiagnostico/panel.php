<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenida</title>
    <link href="generar.css" rel="stylesheet" type="text/css">
</head>
<body>


<br><br>

        <label class="bienvenida">Bienvenido: <?php echo $_SESSION['usuario'] ?></label>

    <br><br>

        <input type="number" min="1" name="n" placeholder="Numero a generar" id="Pedir">
        <button class="buton"  id="boton" onclick="crear()">Generar</button>
  
<br><br>
<script>
		function crear()
		{
			var col=2;
			var filas=parseInt(document.getElementById("Pedir").value)+1;
			var tabla="<table class =\"numeros\">";
			var suma='1';
			var res=1;


    for(i=0;i<filas;i++){ 
    	if(i==0)
    	{
    		tabla+="<tr class =\"titulo\">";
    		tabla+="<td> Número </td>";//numero
    		tabla+="<td> Procedimiento </td>";//Procedimiento
    		tabla+="<td> Resultado </td>";//Resultado
			tabla+="</tr>";
    	}
    	else
    	{
    	if(i==1)
    	{
    	tabla+="<tr>";
        tabla+="<td>"+(i)+ "</td>";//numero
        suma+='x'+(i);
        tabla+="<td class=\"calculo\">"+suma+"</td>";//calculo
       	res=res*(i);
        tabla+="<td class=\"resultado\">"+res+"</td>";//resultado
        tabla+="</tr>";
        suma='1';
    	}
    	else
    	{
        tabla+="<tr>";
        tabla+="<td>"+(i)+ "</td>";//numero
        suma+='x'+(i);
        tabla+="<td class=\"calculo\">"+suma+"</td>";//calculo
       	res=res*(i);

        tabla+="<td class=\"resultado\">"+res+"</td>";//resultado
        
        tabla+="</tr>";
    }
}
    }
    tabla+="</table>";
    document.getElementById("resultado").innerHTML=tabla;
}	
	</script>
<div id="resultado" class="ctabla"></div>

</body>
</html>