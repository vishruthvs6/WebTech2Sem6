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

    <title>Food Paradise</title>

<script>
	
		function init(){

			xhr = new XMLHttpRequest();	
			if(xhr)
			{
				xhr.onreadystatechange = getContent;
				xhr.open("GET", "content1.txt", true);
				xhr.send(null);
			}	
		}
		function getContent(){
		
		if(xhr.readyState=="4"&&xhr.status==200){
				var arr=(xhr.responseText).split(";");
				document.getElementById("secondary1").innerHTML=arr[0];
				document.getElementById("picture1").innerHTML=arr[3]; 
				document.getElementById("picture2").innerHTML=arr[4]; 
				document.getElementById("picture3").innerHTML=arr[5]; 
				setTimeout(getPic1,1000);	
		  }
		
		
		}
		function getPic1(){
			xhr.open("GET", "image1.txt", true);
			xhr.onreadystatechange = showImg1;
			xhr.send(null);
		
		
		}
		function showImg1()
		{
			if(xhr.readyState == 4 && xhr.status == 200)
			{
				document.getElementById("picture1").innerHTML = xhr.responseText;	
			}
			setTimeout(getPic2,2000);
			
		}

		function getPic2(){
		
			xhr.open("GET", "image2.txt", true);
			xhr.onreadystatechange = showImg2;
			xhr.send(null);
		
		
		}
		function showImg2()
		{
			if(xhr.readyState == 4 && xhr.status == 200)
			{
				document.getElementById("picture2").innerHTML = xhr.responseText;	
			}
			setTimeout(getPic3,2000);			
		}

		function getPic3(){
		
			xhr.open("GET", "image3.txt", true);
			xhr.onreadystatechange = showImg3;
			xhr.send(null);
		
		
		}
		function showImg3()
		{
			if(xhr.readyState == 4 && xhr.status == 200)
			{
				document.getElementById("picture3").innerHTML = xhr.responseText;	
			}

			setTimeout(getContent2,3000);	
		}

		function getContent2(){
		
			xhr.open("GET", "content1.txt", true);
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
			setTimeout(getContent3,3000);
			
		}


		function getContent3(){
		
			xhr.open("GET", "content1.txt", true);
			xhr.onreadystatechange = showContent3;
			xhr.send(null);
		
		
		}
		function showContent3()
		{
			if(xhr.readyState == 4 && xhr.status == 200)
			{
				var arr=(xhr.responseText).split(";");
				document.getElementById("secondary3").innerHTML=arr[2];	
			}
		}
</script>
</head >
<body onload="setTimeout(init,2000)">
	<div class="container">
      
    <?php require 'include/header.php';?> 




<div id="doc" class="yui-t7">
  <div id="hd">
    <div id="header"><h3>Restaurants</h3><p>Displaying the information about the Restaurants</p><div id="logo"></div></div>
  </div>
  <div id="bd">
    <div id="yui-main">
      <div class="yui-b">
        <div class="yui-gb">
          <div class="yui-u first">
          	<h3>Sanman</h3>
		  <div class="content" id="picture1"></div>
            
          </div>
          <div class="yui-u first">
          <h3>Sagar</h3>
            <div class="content" id="picture2"></div>
          </div>
          <div class="yui-u first">
          	<h3>Agarwal</h3>
            <div class="content" id="picture3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="yui-b">
      <h3>Sanman</h3>
      <div id="secondary1"></div>
    </div>

    <div class="yui-b">
    <h3>Sagar</h3>
      <div id="secondary2"></div>
    </div>

    <div class="yui-b">
    <h3>Agarwal</h3>
      <div id="secondary3"></div>
    </div>
  </div>
</div>
<?php require 'include/footer.php';?> 
</div>   
</body>
</html>
