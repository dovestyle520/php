<html>
<head>
	Submit results
</head>
<body>
	<h1>Results</h1>
	<?php
        $url = $_REQUEST["url"];
        $email = $_REQUEST["email"];

        $url = parse_url($url);
        $host = $url["host"];
        if(!($ip=gethostbyname($host))){
        	echo "Host for URL does not have valid IP";
        	exit;
        }
        echo "Host is at IP $ip <br>";

        $email = explode('@', $email);
        $emailhost = $email[1];

        //dns_get_mx()
	?>
</body>
</html>
