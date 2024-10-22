<?php
include("connection.php");
$con = connection();

$id_producto = $_POST['id_producto'];
$MARCA = $_POST['MARCA'];
$NOMBRE = $_POST['NOMBRE'];
$COSTO = $_POST['COSTO'];


$sql="UPDATE productos SET id_producto='$id', marca='$marca', nombre='$nombre', precio='$precio' WHERE id_producto=$id";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>

