<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="https://www.google.com/jsapi">
    </script>
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
  </head>
  <body>
    Type in Hindi (Press Ctrl+g to toggle between English and Hindi)<br>
    <textarea id="transliterateTextarea" onKeyPress="enterpressalert(event, this)"></textarea>
    <p id="https"></p>
  </body>
</html> 
