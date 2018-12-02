<?php
echo '<html>
		<title>NLP Project Working</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
.bg {
    /* The image used */
    background-image: url("bg.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}span {
	
    background-color: #f18973;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 1px 1px;
    cursor: pointer;
	 border-radius: 12px;
	 opacity: 0.9;
}
#mark {
    background-color: yellow;
    color: black;
}
#para1 {
    color: blue;
    text-align: center;
}
</style>

		<head><h1 id="para1"><center>Transliteration</center></h1></head>
		<body background="bg.jpg">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    	<script src="https://www.google.com/jsapi"></script>
<script>
		var x=""
		var y=""
		google.load("elements", "1", {packages: "transliteration"});
      function onLoad() {
       var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: "ctrl+g",
            transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["transliterateTextarea"])
      }
      
      google.setOnLoadCallback(onLoad);
      function myFunction()
      {
        x = document.getElementById("transliterateTextarea").value
        document.getElementById("transliterateTextarea").value = ""
        document.getElementById("inp").value = ""
        document.getElementById("x").value = x
        document.getElementById("y").value = y
        document.getElementById("values").submit();
        
      }
      function enterpressalert(e, textarea)
      {
	  	 var code = (e.keyCode ? e.keyCode : e.which);
       	if(code == 13) 
       	{
      		y = document.getElementById("transliterateTextarea").value
          setTimeout(myFunction, 350)
	  		 }
	}
	function entrpressalert(e, textarea)
      {
	  	 var code = (e.keyCode ? e.keyCode : e.which);
       	if(code == 13) 
       	{
      		z = document.getElementById("inp").value
      		document.getElementById("z").value = z
      		document.getElementById("value").submit();
	  	}
	}
	</script>
  	<form>
  	<center><span>Type in English(Press enter)</span><br>
  	<input type="text" id="inp" onKeyPress="entrpressalert(event, this)"><br><br><br>
   <span> Type hindi word in english script(Press enter)</span><br>
    <input type="text" id="transliterateTextarea" onKeyPress="enterpressalert(event, this)">
	</center></form>
	<form action="try1.php" method="post">
	<center><button class="button" name="add">Add</button></center>
	</form>
	<form action="try1.php" method="post"><center>
	<button class="button" name="del1">Delete using english word</button>
	</center></form>
	<form action="try1.php" method="post">
	<center><button class="button" name="del2">Delete using hindi word in english script</button><center>
	</form>
	<form id = "values" action="try1.php" method="post">
        	<input type="text" id="x" style="visibility:hidden" name="x">
        	<input type="text" id="y" style="visibility:hidden" name="y">
        	<input type="text" id="isposted" name="isposted" style="visibility:hidden" value=1>
     </form>
</form>
	<form id = "value" action="try1.php" method="post">
        	<input type="text" id="z" style="visibility:hidden" name="z">
        	<input type="text" id="ispost" name="ispost" style="visibility:hidden" value=1>
     </form>
';
if(isset($_POST["dell1"]))//Function to delete using english word
{
	$servername = "localhost";
	$username = "root";
	$password = "ani";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$de1 = $_POST["de1"];
	$selection_of_word = "SELECT * FROM wordssentences3 WHERE english='$de1'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo '<form action = "try1.php" method = "post">
		<span>Sorry data does not exist:</span><br>
		<button class="button" name = "back">Back</button>
		</form';
	}
	else
	{
		$selection_of_word = "DELETE FROM wordssentences3 WHERE english='$de1'";
		mysqli_query($conn,$selection_of_word);
		echo '<form action = "try1.php" method = "post">
		<span>Data deleted:</span><br>
		<button class="button" name = "back">Back</button>
		</form';
	}
}
if(isset($_POST["dell2"]))//Function to delete using hindi word in english script
{
	$servername = "localhost";
	$username = "root";
	$password = "ani";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$de2 = $_POST["de2"];
	$selection_of_word = "SELECT * FROM wordssentences3 WHERE hindi='$de2'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo '<form action = "try1.php" method = "post">
		Sorry data does not exist:<br><br>
		<button class="button" name = "back">Back</button>
		</form';
	}
	else
	{
		$selection_of_word = "DELETE FROM wordssentences3 WHERE hindi='$de2'";
		mysqli_query($conn,$selection_of_word);
		echo '<form action = "try1.php" method = "post">
		<span>Data deleted:</span><br><br>
		<button class="button" name = "back">Back</button>
		</form';
	}
}
if(isset($_POST["del1"]))//Function to accept english word which is to be deleted
{
	echo '<form action="try1.php" method="post">
			<input type = "text" name = "de1"><br><br>
			<button class="button" name="dell1">Delete</button>';
}
if(isset($_POST["del2"]))//Function to accept hindi word in english script which is to be deleted
{
	echo '<form action="try1.php" method="post">
			<input type = "text" name = "de2"><br><br>
			<button class="button" name="dell2">Delete</button>';
}
if(isset($_POST["cont"]))//Function to add values to database
{
	$servername = "localhost";
	$username = "root";
	$password = "ani";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$id1 = $_POST["id1"];
	$id2 = $_POST["id2"];
	$id3 = $_POST["id3"];
	$selection_of_word = "SELECT * FROM wordssentences3 WHERE hindiword='$id3'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows > 0)
	{
		echo '<form action = "try1.php" method = "post">
		<span>Sorry data already exists:</span><br>
		<button class="button" name = "back">Back</button>
		</form';
	}
	else
	{
		$selection_of_word = "INSERT INTO wordssentences3(english,hindi,hindiword) VALUES('$id1','$id2','$id3')";
		mysqli_query($conn,$selection_of_word);
		echo '<form action = "try1.php" method = "post">
		<span>Data inserted:</span><br>
		<button class="button" name = "back">Back</button>
		</form';
	}
}
if(isset($_POST["add"]))//Function to accept values to be added
{
	echo '<script>
	var a="";
	var b="";
	var c="";
	google.load("elements", "1", {packages: "transliteration"});
      function onLoa() {
       var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: "ctrl+g",
            transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["transliterateText"])
      }
      
      google.setOnLoadCallback(onLoa);
      function m()
      {
      	a = document.getElementById("transliterateText").value
        c = document.getElementById("input").value
        document.getElementById("h1").innerHTML = c
        document.getElementById("h2").innerHTML = b
        document.getElementById("h3").innerHTML = a
        document.getElementById("id1").value = c
        document.getElementById("id2").value = b
        document.getElementById("id3").value = a
        document.getElementById("transliterateText").value = ""
      }
      function entpressalert(e, textarea)
      {
	  	 var code = (e.keyCode ? e.keyCode : e.which);
       	if(code == 13) 
       	{
       		b = document.getElementById("transliterateText").value
          setTimeout(m,300)
	  	}
	}
      </script>
      <form><span>
  	Type english word you want to enter</span><br>
  	<input type="text" id="input"><br><br><span>
    Type Hindi word in English Script you want to enter(Press enter after entering it)</span><br>
    <input type="text" id="transliterateText" onKeyPress="entpressalert(event, this)"><br>
    </form>
    <span><p id="h1" style="color:red;font-size:160%;"> </p></span>
    <span><p id="h2" style="color:red;font-size:160%;"></p></span>
    <span><p id="h3" style="color:red;font-size:160%;"></p></span>
    <form method="post" action="try1.php">
    <span>If you want to continue press Continue, else press Reject</span><br>
    <input type="text" id="id1" style="visibility:hidden" name="id1">
    <input type="text" id="id2" style="visibility:hidden" name="id2"><br>
    <input type="text" id="id3" style="visibility:hidden" name="id3"><br>
    <button class="button" name = "cont">Continue</button>
	</form>
	<form method="post" action="try1.php">
    <button class="button" name = "rej">Reject</button>
	</form>';
}
if(isset($_POST["isposted"]))//Function to print values from Database
{
	$servername = "localhost";
	$username = "root";
	$password = "ani";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$y = $_POST["y"];
	$x = $_POST["x"];
	$selection_of_word = "SELECT * FROM wordssentences3 WHERE hindiword='$x'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo '<center><span>Sorry no such word or any other closer word according to our algorithm exists in database. Are you sure you wanted to enter '.$y.' which means '.$x.' according to us <br><br></span></center>';
	}
	echo "<table bgcolor='white' border='2' opacity=0.8>";
	
	while($row=mysqli_fetch_row($result))
	{	if($row[1] == $y)
		{
			echo "<tr><td>".$row[0]."</td><td> ".$y."</td><td> ".$x."</td></tr>";if($row[3]!=""){
			echo "<br><span>".$row[3].".</span><br><br>";
			echo "<span>".$row[4]."|</span><br><br>";
			}
		}
		else
		{
			echo '<span>Given word is not available in database but it appears you are looking for '.$x.' corresponding word for it in english script in our database is '.$row[1].'</span><br>';
		}
	}
	echo "</table>";
	echo '<center><form action = "try1.php" method = "post">
		<br><button class="button" name = "back">Back</button>
		</form></center>';
}
if(isset($_POST["ispost"]))//Function to print values using database
{
	$servername = "localhost";
	$username = "root";
	$password = "ani";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$z = $_POST["z"];
	$selection_of_word = "SELECT hindi FROM wordssentences3 WHERE english='$z'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo '<form action = "try1.php" method = "post">
		<span>Sorry no such word exists in database:</span><br><br>
		<button class="button" name = "back">Back</button>
		</form>';
	}
	while($row = mysqli_fetch_row($result))	
	{
		echo "<script>
		document.getElementById('inp').value = '$z'
		document.getElementById('transliterateTextarea').value = '$row[0]'
		function setSelectionRange(input, selectionStart, selectionEnd) {
        if (input.setSelectionRange) {
        input.focus();
        input.setSelectionRange(selectionStart, selectionEnd);
        }
        else if (input.createTextRange) {
        var range = input.createTextRange();
        range.collapse(true);
        range.moveEnd('character', selectionEnd);
        range.moveStart('character', selectionStart);
        range.select();
}
}
function setCaretToPos (input, pos) {
setSelectionRange(input, pos, pos);
}
setCaretToPos(document.getElementById('transliterateTextarea'), 30);
		</script>";
	}
}
echo "</body></html>";
?>
