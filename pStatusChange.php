<?php include "connect.php"; ?>

<?php 

	$sql = "Update TBL_Telefone Set PStatus = 'Sim' Where PStatus = 'Nao';";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>


?>