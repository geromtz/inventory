<?php
    require_once("layout/header.php");
?>   

<h1 class="text-center">nuevo</h1>
<form action="" method="get">
    <input type="text" placeholder="Ingrese nombre:" name="nombre"><br>
    <input type="text" placeholder="Ingrese precio:" name="precio"><br>
    <input type="submit" class="btn" name="m" value="GUARDAR"><br>
    <input type="hidden" name="m" value="guardar"><br>
</form>
<?php
    require_once("layout/footer.php");
?>