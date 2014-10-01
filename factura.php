<?php
$cantidad1 = $_GET['cantidad1'];
$cantidad2 = $_GET['cantidad2'];
$cantidad3 = $_GET['cantidad3'];
$producto1 = $_GET['producto1'];
$producto2 = $_GET['producto2'];
$producto3 = $_GET['producto3'];
$precio1 = $_GET['precio1'];
$precio2 = $_GET['precio2'];
$precio3 = $_GET['precio3'];
?>
<html>
    <body>
        <p>
        <?php
            $total1 = $cantidad1 * $precio1;
            $total2 = $cantidad2 * $precio2;
            $total3 = $cantidad3 * $precio3;
	$subtotal = $total1+$total2+$total3;	
	$IVA = $subtotal * .16;
	$total=$subtotal + $IVA;
         ?>
	<table>
		<tr>
			<td><?php echo $cantidad1; ?></td>
			<td><?php echo $producto1; ?></td>
			<td><?php echo $total1; ?></td>
		</tr>
		<tr>
			<td><?php echo $cantidad2; ?></td>
			<td><?php echo $producto2; ?></td>
			<td><?php echo $total2; ?></td>
		</tr>
		<tr>
			<td><?php echo $cantidad3; ?></td>
			<td><?php echo $producto3; ?></td>
			<td><?php echo $total3; ?></td>
		</tr>
		<tr>
			<td></td>
			<td>Subtotal</td>
			<td><?php echo $subtotal; ?></td>
		</tr>
		<tr>
			<td></td>
			<td>IVA</td>
			<td><?php echo $IVA; ?></td>
		</tr>
		<tr>
			<td></td>
			<td>total</td>
			<td><?php echo $total; ?></td>
		</tr>
	
	</table>
	
    </body>

</html>