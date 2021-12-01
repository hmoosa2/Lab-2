<!DOCTYPE html>
<head>
    <title>jQuery test</title>
	<h1 id="mybanner">Banner</h1>
<p>type something:</p> 
<input type="textbox" id="inputbox"/>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script> $(document).ready(function(){
    $("#inputbox").keyup(function(){
        var bannertext = $("#inputbox").val();
        if (bannertext === "")
        {
            bannertext = "Banner";
        }
        $("#mybanner").html(bannertext);
    });
});</script>
<script>
$(document).ready(function(){
    $("#addto").click(function(){
    var newItem = ""+$("#inputbox").val()+"";
        $("#mylist").append(newItem);
    });
    $("#clearlist").click(function(){
        $("#mylist").empty();
    });
});
</script>
</head>
<body>
<h2> add things to a list </h2>
<input type="textbox" id="inputbox"/>
<button id="addto">Click to add</button>
<button id="clearlist">Click to clear list</button>
<ul id="mylist">
</body>
</html>
