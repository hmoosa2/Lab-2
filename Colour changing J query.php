<!DOCTYPE html>
<head>
    <title>jQuery test</title>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script> $(document).ready(function(){
	$("#mytoggle").click(function(){
		var mystate = $("#mytoggle").html();
		if (mystate === "TRUE")
		{
			$("#mytoggle").html("FALSE");
		}
		else
		{
			$("#mytoggle").html("TRUE");
		}
	});
}); </script>
</head>
<body>
<h1 id="mytoggle">TRUE</h1>
</h1>
</body>
</html>
