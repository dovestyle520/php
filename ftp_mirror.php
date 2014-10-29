<html>
<head>
    <title>Mirror update</title>
</head>
<body>
    <h1>Mirror update</h1>
<?php
    $host = "ftp.cs.hust.edu.cn";
    $user = "anonymous";
    $password = "me@example.com";
    $remotefile = "/pub/tsg/teraterm/ttssh14.zip";
    $localfile = "/tmp/ttssh14.zip"; 

    $conn = ftp_connect($host);
    if(!$conn){
    	echo "ERROR: Could not connect to the ftp server";
    	exit;
    }

    echo "Connected to $host.<br/>";

    $result = @ftp_login($conn, $user, $pass);
    if(!$result){
    	echo "Error: Could not log on as $user <br/>";
    	exit;
    }

    echo "Logged in as $user<br/>";

    if(file_exists($localfile)){
    	$localtime = filemtime($localfile);
    	echo "Local file last update";
    	echo date("G:i j-M-Y", $localtime);
    	echo "<br/>";
    }
    else{
    	$localtime = 0;
    }

    $remotetime = ftp_mdtm($conn, $remotefile);
    if(!($remotetime >=0)){
    	echo "Can't access remote file time.<br/>";
    	$remotetime = $localtime + 1;
    }
    else{
    	echo "Remote file last update ";
    	echo date("G:i j-M-Y", $remotetime);
    	echo "<br/>";
    }
    
    if(!($remotetime > $localtime)){
    	echo "Local copy is up to date. <br/>";
    	exit;
    }
    //download file
    echo "Getting file from server...";
    $fp = fopen($localfile,"w");
    if(!$success == ftp_fget($conn, $fp, $remotefile, FTP_BINARY)){
    	echo "ERROR: Could not download file";
    	ftp_quit($conn);
    	exit;
    }

    fclose($fp);
    echo 'File downloaded successfully';
    ftp_quit($conn);
?>
</body>
</html>