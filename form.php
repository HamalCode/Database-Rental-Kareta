<!DOCTYPE html>
<html>
<head>
	<title>Form Dadus-Reantal Kareta</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	include 'config/conn.php';
	if(isset($_GET["assaun"]) && $_GET["assaun"]=="aumenta"){
		$id				= "";
		$naran 		= "";
		$inicial	= "";
		$obs			= "";
		$sobre 		= "foun";
	}else{
		$Qf=$mietib->query("SELECT * FROM t_kareta WHERE id_kareta ='$_GET[id]'");
		$Df=$Qf->fetch(PDO::FETCH_BOTH);
		$id				= $Df["id_kareta"];
		$naran 		= $Df["nrn_kareta"];
		$inicial	= $Df["inc_kareta"];
		$obs			= $Df["obs_kareta"];
		$sobre 		= "renova";

	}
?>
<h1>Form Input & Renova Dadus Kareta</h1>
<fieldset>
	<legend>Detallu Field Kareta</legend>

	<form action="prosesu.php" method="POST">
		<input type="hidden" name="txtIdE" value="<?=$id;?>"><br>
		<input type="hidden" name="sobre" value="<?=$sobre;?>"><br>
		<label>ID Kareta</label>
		<input type="text" name="txtId" maxlength="1" required="required" value="<?=$id;?>"><br>
		<label>Naran Kareta</label>
		<textarea name="txtNrn" cols="40"  required="required"><?=$naran;?></textarea><br>
		<label>Inicial Kareta</label>
		<input type="text" name="txtInc" size="51"  required="required" maxlength="25" value="<?=$inicial;?>"><br>
		<label>Observasaun</label>
		<textarea name="txtObs" cols="40"><?=$obs;?></textarea> <br>
		<br>
		<br>

			<input type="submit" name="submit" value="Prosesu">
			<input type="reset" name="reset" value="Reset">
				<input type="button" name="cancel" value="Cancela" onClick="window.history.back();" style="float: right">
	</form>
</fieldset>
</body>
</html>