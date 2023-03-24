<?php
echo "<h1>File and File system Function</h1><hr>";

echo "File Status : ".file_exists("notes.txt")."<br/>";

	//echo "</br>Base Name :".basename("C:\wamp64\www\cyber\file\notes.txt");
if(file_exists("notes.txt")){
$status = fopen("notes.txt","w");
	echo "File is available</br>";
	
echo fwrite($status,"15.	Why is PHP array called associated array? Explain internal mechanisms of it.",20);
		
	//echo fread($status,filesize("notes.txt"));

//closing a file and release lock
//fclose($status);
}
else
	echo "File Not available</br>";
?>
<?php
$file = "newfile.txt";

// Check the existence of file
if(file_exists($file)){
    // Attempt to rename the file
    if(rename($file, "notes.txt")){
        echo "<br/>File renamed successfully.";
    } else{
        echo "<br/>ERROR: File cannot be renamed.";
    }
} else{
    echo "<br/>ERROR: File does not exist.";
}

echo "<hr>".realpath("notes.txt");
echo "<br> Delete :".unlink("notes3.txt");

//creating folder/directory only
mkdir("new Folder1123.java");

copy("index.php","n123//cyber.php");

?>