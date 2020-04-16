<?php 
session_start(); 
?>
<html>
<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<link rel="stylesheet" type="text/css" href="styles.css" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>About Us</title>


    <style>
    	.button {
    display: block;
    width: 115px;
    height: 25px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}

</style>

<script>
	
		function init(){

			xhr = new XMLHttpRequest();	
			if(xhr)
			{
				xhr.onreadystatechange = getContent;
				xhr.open("GET", "about1.txt", true);
				xhr.send(null);
			}	
		}
		function getContent(){
		
		if(xhr.readyState=="4"&&xhr.status==200){
				var arr=(xhr.responseText).split(";");
				document.getElementById("secondary1").innerHTML=arr[0];
				setTimeout(getContent2,2000);	
		  }
		
		
		}
		
		function getContent2(){
		
			xhr.open("GET", "about1.txt", true);
			xhr.onreadystatechange = showContent2;
			xhr.send(null);
		
		
		}
		function showContent2()
		{
			if(xhr.readyState == 4 && xhr.status == 200)
			{
				var arr=(xhr.responseText).split(";");
				document.getElementById("secondary2").innerHTML=arr[1];	
			}

			
		}

</script>
</head >
<body onload="setTimeout(init,2000)">
	<div class="container">
      
    <?php require 'include/header.php';?> 

<div id="doc" class="yui-t7">
    <div id="header"><h3>About Food Paradise </h3><div id="logo"></div></div>

    <div class="yui-b">
      <h3></h3>
      <div id="secondary1"></div>
    </div>

    <div class="yui-b">
    <h3></h3>
      <div id="secondary2"></div>
    </div>

  </div>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>

<a href="http://localhost:8081" class="w3-btn w3-black"> More Details </a>


<?php require 'include/footer.php';?> 
</div>  


</body>
</html>
