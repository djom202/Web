<?php
	if(isset($_REQUEST['nombre'])){
		include('../clases/conexion.php');
		if ($_SESSION['id_tipo']==0) {
			$sql='INSERT INTO `empresa`(`nombre`, `sede`, `admin`) VALUES ("'.$_REQUEST['nombre'].'",'.$_REQUEST['sede'].','.$_REQUEST['admin'].')';
		}else{
			$sql='INSERT INTO `empresa`(`nombre`, `sede`, `admin`) VALUES ("'.$_REQUEST['nombre'].'",'.$_REQUEST['sede'].','.$_SESSION['user_id'].')';
		}
		$result=mysql_query($sql,$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) { header('location ../error/error.php?error=$my_error()'); }
	}
	//echo $sql;
	header('location: ../site/admin/');
?>