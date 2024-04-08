<?php
include('bd.php');

if(isset($_POST['contraseña']) ||isset($_POST['usuario'])  ){ 
   $usuario=$_POST['usuario'];
  $contraseña=$_POST['contraseña'];
}




$consulta="SELECT*FROM datos where usuario='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:home.html");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <div class="alert alert-danger ">
  <p> <strong>Error</strong>  datos invalidos</p></h>
  
  <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>

    
  <?php
 
}
mysqli_free_result($resultado);
mysqli_close($conexion);
