<?php
$servername = "localhost";
$username = "root";//The user is required to change the contents of this to give their appropriate username and password;
$password = "ani";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) 
	echo "Connection failed<br>";
else
	echo "Connection Established<br>";

$cd="create database nlp";//This creates a new database called nlp;
$conn->query($cd);
if($conn->query("use nlp"))
	echo "using";

$sql = "CREATE TABLE wordssentences3 (
english VARCHAR(255) NOT NULL,
hindi VARCHAR(255) NOT NULL,
hindiword varchar(200) COLLATE utf8_unicode_ci,
englishsentence VARCHAR(255),
hindisentence varchar(200) COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
";//This the table that is being created here, the table has 4 columns,the first column is the english word, the second column has the corresponding hindi word in the english script having the same meaning as the english word of the first column, the third column has an example sentence for the word in the first column and the fourth column has an example of the sentence of the second column and having same meaning as that of the sentence of the column.

 if ($conn->query($sql) === TRUE) {
     echo "Table words created successfully";
 } else {
     echo "Error creating table: " . $conn->error;
 }
 
 if ($fh = fopen('100.txt', 'r')) {//We are reading a file here which has the contents to be uploaded in the database table mentioned earlier.Each sentence in the file '100.txt' corresponds to a roe in the database table separated by comma entries.
    while (!feof($fh)) {
        $line = fgets($fh);
        echo $line;
        $b=explode(";",$line);
    	  $tw=count($b);
    	  if($tw!=1){
    	  	echo $tw."total count <br>";	
    	  	if($tw==3){
    	  		$b[3]="";
    	  		$b[4]="";
    	  		$b[2]=substr($b[2],0,strlen($b[2])-1);
    	  		$tw=$tw+2;
    	  		echo "3".$b[2]."asasdsa";
    	  		$sql="INSERT INTO wordssentences3 (english,hindi,hindiword,hindisentence,englishsentence)
    	  		VALUES ('".$b[0]."','".$b[1]."','".$b[2]."','".$b[3]."','".$b[4]."');";
    	  	
    	  	}
    	  	else{
    	  		if($tw==5){
    	  		$b[4]=substr($b[4],0,strlen($b[4])-1);
    	  		echo "5".$b[2]."asasdsa";
    	  		$sql="INSERT INTO wordssentences3 (english,hindi,hindiword,hindisentence,englishsentence)
    	  		VALUES ('".$b[0]."','".$b[1]."','".$b[2]."','".$b[3]."','".$b[4]."');";
    	  		}
    	  	}
    	  	echo $sql."<br><br>";
    	  	if($conn->query($sql)){
 				echo "successfully entered";	
			 }
 			else{
 				echo "Error entering table: " . $conn->error;
 			}
 			
    	  
    	  
    	  
    	  
    	  
    	 }
    }
    fclose($fh);

}//after this your database will be ready.
?>
