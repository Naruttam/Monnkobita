<html>
<head>
<title>Learning Ajax</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
function swapContent(cv)
{
	$("MyDiv").html("animated.gif here").show();
	var url = "myphpscript.php";
	$.ajax({
		url:url,
		type:"post",
		data: '&contentVar='+cv,
		dataType:"html",
		success:function(data){
		$("#MyDiv").html(data);
		}
	});
	/*$.post(url,{contentVar:cv},function(data){$("#MyDiv").html(data).show();});*/
}

</script>
</head>
<body>
<a href="#" onclick="return false" onmousedown="javascript:swapContent('con1');">Content1</a> &nbsp; &bull; &nbsp;
<a href="#" onclick="return false" onmousedown="javascript:swapContent('con2');">Content2</a> &nbsp; &bull; &nbsp;
<a href="#" onclick="return false" onmousedown="javascript:swapContent('con3');">Content3</a>
<div id="MyDiv">Default text</div>
</body>
</html>