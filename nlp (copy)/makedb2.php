<?php
//$myfile = fopen($_FILES['file1']['name'], "r");
/*$x=file_get_contents($_FILES['file1']['tmp_name']);
//echo $x;
$x=preg_replace('/\n/',' ',$x);
$b=explode(";",$x);
$tw=count($b);
echo $tw."<br>";
for($i=0;$i<$tw-1;$i++){
	echo $b[$i]."::inside<br>";
}*/
//while (($line = fgetcsv($myfile)) !== FALSE) {
   //$line[0] = '1004000018' in first iteration
//   print_r($line);
//}

//fclose($file);
$servername = "localhost";
$username = "root";
$password = "ani";
//$dbname = "nlp";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) 
	echo "Connection failed<br>";
else
	echo "Connection Established<br>";
$cd="create database nlp";
$conn->query($cd);
if($conn->query("use nlp"))
	echo "using";
$sql = "CREATE TABLE wordssentences2 (
english VARCHAR(255) NOT NULL,
hindi VARCHAR(255) NOT NULL,
englishsentence VARCHAR(255),
hindisentence varchar(200) COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
";
 if ($conn->query($sql) === TRUE) {
     echo "Table words created successfully";
 } else {
     echo "Error creating table: " . $conn->error;
 }
 echo "hellO";
 if ($fh = fopen('nlpdata6(1).csv', 'r')) {
    while (!feof($fh)) {
        $line = fgets($fh);
        echo $line;
        $b=explode(";",$line);
    	  $tw=count($b);
    	  if($tw!=1){
    	  	echo $tw."total count <br>";	
    	  	if($tw==2){
    	  		$b[2]="";
    	  		$b[3]="";
    	  		//$b[1]=preg_replace('/\n/','',$b[1]);
				$b[1]=substr($b[1],0,strlen($b[1])-2);
    	  		$tw=$tw+2;
    	  		echo $b[1]."asasdsa";
    	  		$sql="INSERT INTO wordssentences2
    	  		VALUES ('".$b[0]."','".$b[1]."','".$b[2]."','".$b[3]."');";
    	  	
    	  	}
    	  	else{if($tw==4){
    	  		//$b[3]=preg_replace('/\n/','',$b[3]);
				//$b[3]=str_replace(' ','',$b[3]);
    	  		$b[3]=substr($b[3],0,strlen($b[3])-2);
    	  		$sql="INSERT INTO wordssentences2
    	  		VALUES ('".$b[0]."','".$b[1]."','".$b[2]."','".$b[3]."');";
    	  		
    	  	}}
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

}
$sql="select * from wordssentences2 where english='data';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
	echo $row[3]." fsffsdfdsdsfdsf";
}
echo "<br>";
$sql="select * from wordssentences2 where english='arc';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
	echo $row[2]." ".$row[3]." fsffsdfdsdsfdsf";
}
echo "<br>";
$sql="select * from wordssentences2 where english='average';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
	echo $row[2]." ".$row[3]." fsffsdfdsdsfdsf";
}
echo "<br>";
$sql="select * from wordssentences2 where hindi='bagal';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
	echo $row[2]." ".$row[3]." fsffsdfdsdsfdsf";
}
/*for($i=0;$i<$tw-1;$i=$i+2){
 $sql="INSERT INTO words
VALUES ('".$b[$i]."','".$b[$i+1]."');";
 echo $sql."<br>";
 if($conn->query($sql)){
 	echo "successfully entered";	
 }
 else{
 	echo "Error entering table: " . $conn->error;
 }}*/
?>
