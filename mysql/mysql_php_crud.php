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
			text-align:center;
			margin-left:10px;
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
	</style>
</head>
<body>
	<center><h2>Employee Registration Form</h2></center>
	<form action="#" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		
		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea>
		
		<div class="form-group">
			<label for="hobbies">Hobbies:</label>
			<input type="checkbox" id="hobby1" name="hobbies" value="Reading">
			<label for="hobby1">Reading</label>
			<input type="checkbox" id="hobby2" name="hobbies" value="Sports">
			<label for="hobby2">Sports</label>
			<input type="checkbox" id="hobby3" name="hobbies" value="Music">
			<label for="hobby3">Music</label>
		</div>
		
		<div class="form-group">
			<label for="gender">Gender:</label>
			<input type="radio" id="male" name="gender" value="Male">
			<label for="male">Male</label>
			<input type="radio" id="female" name="gender" value="Female">
			<label for="female">Female</label>
			<input type="radio" id="other" name="gender" value="Other">
			<label for="other">Other</label>
		</div>
		
		<div class="form-group">
				        <input type="reset" value="Reset">
			    <input type="submit" value="Submit"> 
		</div>
</form>
</body>
</html>