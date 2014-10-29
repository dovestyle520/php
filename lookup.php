<html>
<head>
    <title>Stock quote nasdaq</title>
</head>
<body>
    <h1>kkkkkk</h1>
    <?php
        $symbol = "AMZN";
        $url = 'http://finance.yahoo.com/d/quotes.csv'.'?s='.$symbol.'&e=.csv&f=sl1dltcloghv';
        if(!($contents=file_get_contents($url))){
            die('Failure to open'.$url);
        }
        list($symbol,$quotes,$date,$time)=explode(',', $contents);
        $date = trim($date,'"');
        $time = trim($time,'"');

        echo "<p>".$symbol."was last sold at ". $quotes.'</p>' ;
        echo "<p>Quote current as of ".$date.' at '.$time.'</p>';

        echo "<p>This information retrieved from <br/><a href='" .$url."'>".$url."</a>.</p>";
    ?>
</body>
</html>