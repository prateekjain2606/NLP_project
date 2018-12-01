<?php
echo '
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
  	Type in english(Press enter)<br>
  	<input type="text" id="inp" onKeyPress="entrpressalert(event, this)"><br>
    Type hindi word in english script(Press enter)<br>
    <input type="text" id="transliterateTextarea" onKeyPress="enterpressalert(event, this)">
	</form>
	<form action="try1.php" method="post">
	<button name="add">Add</button>
	</form>
	<form action="try1.php" method="post">
	<button name="del1">Delete using english word</button>
	</form>
	<form action="try1.php" method="post">
	<button name="del2">Delete using hindi word in english script</button>
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
if(isset($_POST["dell1"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$de1 = $_POST["de1"];
	$selection_of_word = "SELECT * FROM words WHERE english='$de1'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo '<form action = "try1.php" method = "post">
		Sorry data does not exist:<br>
		<button name = "back">Back</button>
		</form';
	}
	else
	{
		$selection_of_word = "DELETE FROM words WHERE english='$de1'";
		mysqli_query($conn,$selection_of_word);
		echo '<form action = "try1.php" method = "post">
		Data deleted:<br>
		<button name = "back">Back</button>
		</form';
	}
}
if(isset($_POST["dell2"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$de2 = $_POST["de2"];
	$selection_of_word = "SELECT * FROM words WHERE hindi='$de2'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo '<form action = "try1.php" method = "post">
		Sorry data does not exist:<br><br>
		<button name = "back">Back</button>
		</form';
	}
	else
	{
		$selection_of_word = "DELETE FROM words WHERE hindi='$de2'";
		mysqli_query($conn,$selection_of_word);
		echo '<form action = "try1.php" method = "post">
		Data deleted:<br><br>
		<button name = "back">Back</button>
		</form';
	}
}
if(isset($_POST["del1"]))
{
	echo '<form action="try1.php" method="post">
			<input type = "text" name = "de1"><br><br>
			<button name="dell1">Delete</button>';
}
if(isset($_POST["del2"]))
{
	echo '<form action="try1.php" method="post">
			<input type = "text" name = "de2"><br><br>
			<button name="dell2">Delete</button>';
}
if(isset($_POST["cont"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$id1 = $_POST["id1"];
	$id2 = $_POST["id2"];
	$selection_of_word = "SELECT * FROM words WHERE english='$id1' AND hindi='$id2'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows > 0)
	{
		echo '<form action = "try1.php" method = "post">
		Sorry data already exists:<br>
		<button name = "back">Back</button>
		</form';
	}
	else
	{
		$selection_of_word = "INSERT INTO words(english,hindi) VALUES('$id1','$id2')";
		mysqli_query($conn,$selection_of_word);
		echo '<form action = "try1.php" method = "post">
		Data inserted:<br>
		<button name = "back">Back</button>
		</form';
	}
}
if(isset($_POST["add"]))
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
      <form>
  	Type english word you want to enter<br>
  	<input type="text" id="input"><br>
    Type Hindi word in english script you want to enter(Press enter after entering it)<br>
    <input type="text" id="transliterateText" onKeyPress="entpressalert(event, this)"><br>
    </form>
    <p id="h1"></p>
    <p id="h2"></p>
    <p id="h3"></p>
    <form method="post" action="try1.php">
    If you want to continue press continue else reject<br>
    <input type="text" id="id1" style="visibility:hidden" name="id1">
    <input type="text" id="id2" style="visibility:hidden" name="id2"><br>
    <button name = "cont">Continue</button>
	</form>
	<form method="post" action="try1.php">
    <button name = "rej">Reject</button>
	</form>';

}
if(isset($_POST["isposted"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$y = $_POST["y"];
	$x = $_POST["x"];
	$selection_of_word = "SELECT english FROM words WHERE hindi='$y'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo 'Sorry no such word exists in database:<br><br>';
	}
	while($row=mysqli_fetch_row($result))
	{
		echo $row[0]." ".$y." ".$x."<br>";
	}
	echo '<form action = "try1.php" method = "post">
		<br><button name = "back">Back</button>
		</form';
}
if(isset($_POST["ispost"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password,"nlp");
	if (!$conn)
		echo "Connection failed<br>";
	$z = $_POST["z"];
	$selection_of_word = "SELECT hindi FROM words WHERE english='$z'";
	$result=mysqli_query($conn,$selection_of_word);
	if($result->num_rows == 0)
	{
		echo '<form action = "try1.php" method = "post">
		Sorry no such word exists in database:<br><br>
		<button name = "back">Back</button>
		</form';
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
?>