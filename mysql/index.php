<?php
include_once('config.php');
include_once('create.php');
include_once('delete.php');
?>


<!DOCTYPE html>
<html>

<head>
	<title>Employee Registration Form</title>
	<style>
		form {
			border: 2px solid #ddd;
			padding: 20px;
			width: 400px;
			margin: 0 auto;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="text"],
		textarea {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ddd;
			border-radius: 3px;
			box-sizing: border-box;
			font-size: 16px;
		}

		input[type="checkbox"],
		input[type="radio"] {
			margin-right: 10px;
			vertical-align: middle;
		}

		input[type="submit"],
		input[type="reset"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
			text-align: center;
			margin-left: 10px;
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 30%;
		}

		input[type="submit"]:hover,
		input[type="reset"]:hover {
			background-color: #3e8e41;
		}

		.form-group {
			display: flex;
			align-items: center;
			margin-bottom: 4px;
		}

		.form-group label {
			margin-right: 10px;
		}

		.form-group label {
			margin-right: 10px;
		}

		h3 {
			color: Green;
			width: fit-content;
			position: absolute;
			top: 50px;
			right: 20px;
			background-color: #C8C8C8;
		}
		h2 {
			color: blue;
			width: fit-content;
			text-align: center;
			background-color: #C8C8C8;
		}


/* Style for the rows */
tr {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    transition: background-color 0.3s ease-in-out;
  }
  
  /* Style for the font */
  td, th {
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    color: #444;
    padding: 8px;
    text-align: left;
  }

  /* Style for action buttons */
  .action-btn {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin-right: 4px;
    cursor: pointer;
  }

  .action-btn:hover {
    background-color: #3e8e41;
  }

  .delete-btn {
    background-color: #f44336;
  }

  .delete-btn:hover {
    background-color: #da190b;
  }

	</style>
</head>

<body>
	<center>
		<h2>Employee Registration Form</h2>
	</center>
	<form  action="index.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" value="<?php echo $name;?>" required>
		<input type="hidden" id="eid" name="eid" value="<?php echo $eid;?>">
		<label for="address">Address:</label>
		<textarea id="address" name="address" required><?php echo $address;?></textarea>

		<div class="form-group">
			<label for="hobbies">Hobbies:</label>
			<input type="checkbox" id="hobby1" name="hobbies[]" <?php if(str_contains($hobby,"Reading")) {echo "checked";}?> value="Reading">
			<label for="hobby1">Reading</label>
			<input type="checkbox" id="hobby2" name="hobbies[]" <?php if(str_contains($hobby,"Sports")) {echo "checked";}?> value="Sports">
			<label for="hobby2">Sports</label>
			<input type="checkbox" id="hobby3" name="hobbies[]" <?php if(str_contains($hobby,"Music")) {echo "checked";}?> value="Music">
			<label for="hobby3">Music</label>
		</div>

		<div class="form-group">
			<label for="gender">Gender:</label>
			<input type="radio" id="male" name="gender" <?php if(str_contains($gender,"Male")) {echo "checked";}?> value="Male">
			<label for="male">Male</label>
			<input type="radio" id="female" name="gender" <?php if(str_contains($gender,"Female")) {echo "checked";}?> value="Female">
			<label for="female">Female</label>
			<input type="radio" id="other" name="gender" <?php if(str_contains($gender,"Other")) {echo "checked";}?> value="Other">
			<label for="other">Other</label>
		</div>

		<div class="form-group">
			<input type="submit" name="submit" value="Reset">
			<input type="submit" name="submit" value="Submit">
		</div>
	
	</form>
	<?php
	include_once('display.php');
	?>

</body>

</html>