<?php 

	if(isset($_REQUEST['submit'])){

		//print_r($_FILES['myfile']);

		$src = $_FILES['myfile']['tmp_name'];
		$des = "../uploads/".$_FILES['myfile']['name'];

		if(move_uploaded_file($src, $des)){
			header('location: ../views/myinfo.php');
		}else{
			echo "Error Submission";
		}
	}


?>