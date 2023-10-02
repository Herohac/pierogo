
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border:  solid 3px #ccc;
            padding: 10px;
            display:  inline-block;
            text-align: center;
            margin:  0 auto;
        }
        p{
            color: #34ff;
            font-size: 12px;
            font-family: "arial"
        }
        a{
        text-decoration: none; 
        padding: 12px 15px; 
        background-color: green;
        color: white;  
        font-size: 15px;
        border-radius: 5px;
        margin-top:9px;
        }
    </style>
  
 </head>
 <body>
    
<div class="container"> 
      
<?php
if ($_SERVER ["REQUEST_METHOD"]=="POST")
{
   $codigo = $_POST["codigo"];
   $nombre = $_POST["nombre"];
   $precio_compra = $_POST["precio_compra"];
   $categoria = $_POST["categoria"];
   $descripcion = $_POST["descripcion"];    
   $precio = $_POST["precio"];
   $stock = $_POST["stock"];
   
   echo "RECEPCIÓN  DE  DATOS" . "<br>";
   echo "___________________________" ."<br>";
   echo "<p class='data'>codigo : </p> " . $codigo . "<br>";
   echo "<p class='data'>nombre : </p>" . $nombre . "<br>";
   echo "<p class='data'>precio  de  compra: </p> " . $precio_compra . "<br>";
   echo "<p class='data'>categoria : </p>" . $categoria . "<br>";
   echo "<p class='data'>descripcion : </p>" . $descripcion . "<br>";
   echo "<p class='data'>precio : </p>" . $precio . "<br>";
   echo "<p class='data'>stock : </p>" . $stock . "<br>";
  
}
?>
  <div class="separador"> </div>
  <p> <a href="formulario.html"> volver </a></p>
</div>
 </body>
 </html>
