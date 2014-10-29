<html>
<head>
	<title>
		BOOK-ON-SEARCH Results
	</title>
</head>
<body>
<h1>BOOK CATALOG Search Results</h1>
<?php
    $searchtype = $_POST['searchtype'];
    $searchterm = trim($_POST['searchterm']);

    if(!$searchterm || !$searchtype){
    	echo 'You have not entered search details. Please go back and try again.';
    	exit;
    }
    if(!get_magic_quotes_gpc()){
    	$searchtype = addslashes($searchtype);
    	$searchterm = addslashes($searchterm);
    }
    echo "<p>fuck 9</p>";
    @ $db = new mysqli('localhost','bookorama','bookorama123','books');
echo "<p>fuck 0</p>";
    if(mysqli_connect_errno()){
    	echo 'Error: Could not connect to database.Please try again later.';
    	exit;
    }
echo "<p>fuck 1</p>";
    $query = "select * from books where ".$searchtype." like '%".$searchterm."%' ";
    echo $query;
    $result = $db->query($query);
echo "<p>fuck 2</p>";
    $num_results = $result->num_rows;

    echo "<p>Number of books found:".$num_results."</p>";
    
    for($i=0; $i<$num_results; $i++){
    	$row = $result->fetch_assoc();
    	echo "<p><strong>".($i+1).".Title:";
    	echo htmlspecialchars(stripcslashes($row['title']));
    	echo "</strong><br />Author: ";
    	echo stripslashes($row['author']);
    	echo "<br />ISBN: ";
    	echo stripcslashes($row['isbn']);
    	echo "<br /> Price: ";
    	echo stripcslashes($row['price']);
    	echo "</p>";
    }
    $result->free();
    $db->close();
?>
</body>
</html>