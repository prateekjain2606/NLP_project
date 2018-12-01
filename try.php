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
  	Type in english<br>
  	<input type="text" id="inp" onKeyPress="entrpressalert(event, this)"><br>
    Type in Hindi<br>
    <input type="text" id="transliterateTextarea" onKeyPress="enterpressalert(event, this)">
</form>
	<form id = "values" action="try.php" method="post">
        	<input type="text" id="x" style="visibility:hidden" name="x">
        	<input type="text" id="y" style="visibility:hidden" name="y">
        	<input type="text" id="isposted" name="isposted" style="visibility:hidden" value=1>
     </form>

</form>
	<form id = "value" action="try.php" method="post">
        	<input type="text" id="z" style="visibility:hidden" name="z">
        	<input type="text" id="ispost" name="ispost" style="visibility:hidden" value=1>
     </form>

';
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
	while($row=mysqli_fetch_row($result))
	{
		echo $row[0]." ".$y." ".$x."<br>";
	}
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
	while($row = mysqli_fetch_row($result))	
	{
		
		echo "<script>
		document.getElementById('inp').value = '$z'
		document.getElementById('transliterateTextarea').value = '$row[0]'

		</script>";
	}
}

?>
