<?php
	include 'config/conn.php';

	$id 				= $_POST["txtId"];
	$naran 			= $_POST["txtNrn"];
	$inc 				= $_POST["txtInc"];
	$obs 				= $_POST["txtObs"];
	$sobre 			= $_POST["sobre"];

	if($sobre=="foun"){
		$Qf=$mietib->query("SELECT * FROM t_kareta WHERE id_kareta='$id'");
		if($Qf->rowCount()>0){
			echo "<script>alert('Dadus ho Id ida ne\'e registu ona.');</script>";
			echo "<script>window.history.back()</script>";
			return false; 
		} else{
		$Qf=$mietib->query("INSERT INTO t_kareta SET 
			id_kareta 		= '$id',
			nrn_kareta 	= '$naran',
			inc_kareta 	= '$inc',
			obs_kareta 	= '$obs'");
		}
	}
	if($sobre=="renova"){
		$Qf=$mietib->query("UPDATE t_kareta SET 
			id_kareta	= '$id',
			nrn_kareta 	= '$naran',
			inc_kareta 	= '$inc',
			obs_kareta 	= '$obs' WHERE id_kareta ='$_POST[txtIdE]'");
	}

	if(isset($_GET["sobre"]) && $_GET["sobre"]=="apaga"){
		$Qf=$mietib->query("DELETE FROM t_kareta  WHERE id_kareta ='$_GET[id]'");
	}

	header('location:index.php');
?>
