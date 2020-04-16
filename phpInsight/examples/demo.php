<?php
	if (PHP_SAPI != 'cli') {
		echo "<pre>";
	}

	require_once '../../include/order_class.php';
	require_once '../../include/dbcon.php';

	//session_start();

	date_default_timezone_set("Asia/Kolkata");
	$dat = date("Y-m-d");

				  
	if(isset($_POST['textdata']))
	{
		$fp = fopen('../../data.txt', 'a');
		file_put_contents("../../data.txt","");
		$data=$_POST['textdata'];

		fwrite($fp, $data);
		fclose($fp);
	}
    // echo $_POST['textdata'];
	 //echo $_POST['name'];
	

	$array= file('../../data.txt');


	require_once __DIR__ . '/../autoload.php';
	$sentiment = new \PHPInsight\Sentiment();
	foreach ($array as $string) {

	// calculations:
	$scores = $sentiment->score($string);
	$class = $sentiment->categorise($string);

	// output:
	//echo $class;
	$name_insert= $_POST['name'];
	$review_insert=$_POST['textdata'];
	$star= $_POST['star'];
	$pos_score = $scores["pos"];
	$neg_score = $scores["neg"];
	$neu_score = $scores["neu"];
	$dominant=$class;
	
	
	
	if(isset($_POST['name']) and isset($_POST['textdata'])){
		
		$sql = "INSERT INTO reviews VALUES ('$name_insert','$review_insert',$pos_score,$neu_score,$neg_score,'$dominant','$star',0)";
		
		if(mysqli_query($link, $sql)){
			
			echo "Inserted to the table reviews.";
			//header("Location:http://localhost/temp8/index.php");
			echo "\n";
			echo '<a href="http://localhost/project/index.php"> Go back </a>';
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " ;
		}
	}
	
	
	//echo "String: $string\n";
	//echo "Dominant: $class, scores: ";
	//print_r($scores);
	echo "\n";
}

