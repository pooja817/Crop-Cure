<?php
	// Connect to database
	$servername = "localhost";
	$username = "kiranreddy";
	$password = "Kiran@1804";
	$dbname = "dbms";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Create new thread
	if (isset($_POST['title']) && isset($_POST['content'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$sql = "INSERT INTO threads (title, content) VALUES ('$title', '$content')";
		if (mysqli_query($conn, $sql)) {
			//echo "Thread created successfully";
			header("Location:forum.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}