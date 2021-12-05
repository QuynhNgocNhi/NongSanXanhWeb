<?php
require_once('config.php');
?>
<?php
# check if image sent
if (isset($_FILES['Product_Image'])) {

	# database connection file


	# getting image data and store them in var
	$img_name = $_FILES['Product_Image']['name'];
	$img_size = $_FILES['Product_Image']['size'];
	$tmp_name = $_FILES['Product_Image']['tmp_name'];
	$error    = $_FILES['Product_Image']['error'];

	# if there is not error occurred while uploading
	if ($error === 0) {
		if ($img_size > 1000000) {
			# error message
			$error_message = "Sorry, your file is too large.";

			# response array
			$error = array('error' => 1, 'error_message'=> $error_message);

			/**
		    printing out php array and
		    converting it into JSON format
		    **/

		    echo json_encode($error);
		    exit();
		}else {
			# get image extension store it in var
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

			/**
			convert the image extension into lower case
			and store it in var
			**/
			$img_ex_lc = strtolower($img_ex);

			/**
			crating array that stores allowed
			to upload image extensions.
			**/
			$allowed_exs = array("jpg", "jpeg", "png");

			/**
			check if the the image extension
			is present in $allowed_exs array
			**/
			if (in_array($img_ex_lc, $allowed_exs)) {
				/**
				 renaming the image name with
				 with random string
				**/
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;

				# crating upload path on root directory
				$img_upload_path = "data/Product_Img_Upload/".$new_img_name;

				# move uploaded image to 'uploads' folder
				move_uploaded_file($tmp_name, $img_upload_path);

				# inserting imge name into database
                $sql = "INSERT INTO productimgs (ImgUrl)
                        VALUES ('$new_img_name')";
                mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0;");
                mysqli_query($conn, $sql);

                # response array
				$res = array("error" => 0, "src"=> $new_img_name);

                echo json_encode($res);
			    exit();

			}else {
				# error message
				$error_message = "You can't upload files of this type";

				# response array
				$error = array('error' => 1, 'error_message'=> $error_message);

				/**
			    printing out php array and
			    converting it into JSON format
			    **/

			    echo json_encode($error);
			    exit();
			}
		}
	}else {
		# error message
		$error_message = "unknown error occurred!";

		# response array
		$error = array('error' => 1, 'error_message'=> $error_message);

		/**
	    printing out php array and
	    converting it into JSON format
	    **/

	    echo json_encode($error);
	    exit();
	}
}
?>