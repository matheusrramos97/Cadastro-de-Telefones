<?php include "connect.php"; ?>

<?php 

	$sql = "Update TBL_Telefone Set TStatus = 'Sim' Where TStatus = 'Nao';";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>


?>