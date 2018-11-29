<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
$file_name = basename($_FILES["fileToUpload"]["name"]);
$len_name=strlen($file_name);
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file."<br>";
echo $file_name;
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	} 
	else {
        echo "Sorry, there was an error uploading your file.";
   }
   
 ?> 
 </body>
</html>
