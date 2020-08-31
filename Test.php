<?php
include_once "DBconexion.php";
$query= "SELECT * FROM Tienda";
$vr=mysqli_query($conexionLogo,$query);
while($otro=mysqli_fetch_assoc($vr)){ ?>

<tr >
<td>
<?php echo $otro['idTienda']."<br>"; ?> 
</td>
<td>
<?php echo $otro['NombreTienda']."<br>"; ?> 
</td>
<td>
<?php echo $otro['Ruc']."<br>"; ?> 
</td>
<td>
<?php echo $otro['Ubicacion']."<br>"; ?> 
</td><br>
</tr>

<?php

}?> 
