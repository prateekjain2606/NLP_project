<html>
<body>
<form action="trial.php" method="post" enctype="multipart/form-data">
		Type The Word: <br>
		<input type="text" name="v1">
		<br>
		Hindi To English <input type="radio" name="buttongroup1" value="1" id="cb1">
		<br>
		English To Hindi <input type="radio" name="buttongroup1" id="cb2" value="2">
		<br>
		<button value="Go!" name="Go!">Go!</button>
</form>
	
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    	<script src="https://www.google.com/jsapi"></script>
</head>

<?php
$notable=1;
//echo isset($_POST["Go!"]). "what is isset";
if(!isset($_POST["Go!"]))	{
	$notable=0;
	//echo "what is isset";
}
$servername = "localhost";
$username = "root";
$password = "ani";
//$dbname = "nlp";
$conn = mysqli_connect($servername, $username, $password,"nlp");
if (!$conn)
	echo "Connection failed<br>";
else
	echo "Connection Established with nlp<br>";

$x = $_POST["v1"];
//echo "$x here";
if($_POST['buttongroup1']=='1'){
	$selection_of_word = "SELECT english FROM words WHERE hindi='$x'";
	//echo "entered here";
	//echo $selection_of_word." here<br>";
	$result=mysqli_query($conn,$selection_of_word);
	while($row = mysqli_fetch_row($result))	{
		$p=$p."<tr><td>". $row[0]."</td><td>".$x."</td></tr>";
		
	}
	if($notable==1){
	echo "<table border='2'>
			<tr>
				<th>English</th>
				<th>Hindi</th>
			</tr>
				$p
			</table>	";
	}
}

if($_POST['buttongroup1']=='2'){
	$selection_of_word = "SELECT hindi FROM words WHERE english='$x'";
	//echo $selection_of_word." here<br>";
	$result=mysqli_query($conn,$selection_of_word);
	while($row = mysqli_fetch_row($result))	{
		$p=$p."<tr><td>".$x."</td><td>".$row[0]."</td></tr>";
		$eng_hin=$row[0];
	}
	echo "<table border='2'>
			<tr>
				<th>English</th>
				<th>Hindi</th>
			</tr>
				$p
			</table>	";
}

?>

    <script>
		google.load("elements", "1", {packages: "transliteration"});

      function onLoad() {
       var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(['transliterateTextarea'])
      }
      
      google.setOnLoadCallback(onLoad);
      function myFunction()
      {
        var x = document.getElementById("transliterateTextarea").value
        document.getElementById("https").innerHTML = x;
        document.getElementById("transliterateTextarea").value = ""
      }
      function enterpressalert(e, textarea)
      {
	  	var code = (e.keyCode ? e.keyCode : e.which);
      	if(code == 13) 
      	{ 
          setTimeout(myFunction, 300)
	  		}
	}
	</script>
  <body>
    Type in Hindi (Press Ctrl+g to toggle between English and Hindi)<br>
    <textarea id="transliterateTextarea" onKeyPress="enterpressalert(event, this)"><?php
    	if($_POST['buttongroup1']=='1')
    		echo $_POST["v1"];
    	if($_POST['buttongroup1']=='2')
    		echo $eng_hin;
    ?></textarea>
    <p id="https"></p>
  </body>
</html> 
