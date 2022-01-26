<?php

    require("config.php");

    if (!empty($_POST)) {

        $response = array(
            "error" => FALSE
        );

        /*$query = " SELECT 1 FROM users WHERE email = :email";

        //now lets update what :user should be
        $query_params = array(
            ':email' => $_POST['email']
        );

        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
		
        catch (PDOException $ex) {

            $response["error"] = TRUE;
            $response["message"] = "Database Error1. Please Try Again!";
            die(json_encode($response));
        }

        $row = $stmt->fetch();

        if ($row) {

            $response["error"] = TRUE;
            $response["message"] = "I'm sorry, this email is already in use";
            die(json_encode($response));

        } else {*/

            $query = "INSERT INTO kidinfo ( name, email, dob, phone ) VALUES ( :name, :email, :dob, :phone )";

			
            $query_params = array(
                ':name' => $_POST['name'],
                ':email' => $_POST['email'],
				':phone' => $_POST['phone'],
                ':dob' => $_POST['dob']
            );

            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute($query_params);
            }

            catch (PDOException $ex) {
                $response["error"] = TRUE;
                $response["message"] = "Database Error2. Please Try Again!";
                die(json_encode($response));
            }

           /* $name = $_POST['name'];
            $email = $_POST['email'];
			$numbers = "91".$_POST['phone'];
            $subject = "Android Learning Email Verification";
            $message = "Hello $name,\n\nVerify that you own $email.\n\nYou may be asked to enter this confirmation code:\n\n$otp\n\nRegards,\nAndroid Learning.";
            $from = "support@androidlearning.in";
            $headers = "From:" . $from;
               */
           // mail($email,$subject,$message,$headers);

    /*$username = "swaroopsmys@gmail.com";
	$hash = "1792f0f9f43d7a4dd90be1575a5fba547de758bf23ab90e931eca60cabb0cf11";
	$test = "0";
	$sender = "TXTLCL"; 
	//$numbers = "919538786202"; 
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	curl_close($ch);*/

			
            $response["error"] = FALSE;
            $response["message"] = "Register successful!";
            echo json_encode($response);
        //}

    } else {
        echo 'Android Learning';
    }
	
	
	
	?>
