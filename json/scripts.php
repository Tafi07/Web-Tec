<?php
	
	if(isset($_POST['submit']))
	{
		$new_message=array(
			"name" => $_POST['name'],
			"e-mail" => $_POST['email'],
		//	"subject" => $_POST['subject'],
		//	"message" => $_POST['message'],
			

			);

		if(filesize("info.json")==0)
		{
			$first_record = array($new_message);

			$data_to_save = $first_record;


		}
		else{
			$old_records = json_decode(file_get_contents("info.json"));


			array_push($old_records, $new_message);

			$data_to_save=$old_records;

		}

		if(!file_put_contents("info.json",json_encode($data_to_save,JSON_PRETTY_PRINT),LOCK_EX))
		{
			$error = "EROOR STORING DATA";
		}
		else{
			$success = "DATA STORED SUCCESFULLY";
		}


	}