<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Termometr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<link rel="stylesheet" href="animate.min.css">
    <!-- <script src="main.js" defer></script> -->
</head>
<body>
    <div id="temp" class="center">
        <?php
            $filepath = '/sys/bus/w1/devices/28-0316b317eaff/w1_slave';
            $degree = "°C";
            
            $file = fopen($filepath, "r") or die("Unable to open file!");
            $data = fread($file, filesize($filepath));
            $temp = strchr($data, "t=");
            $temp = preg_replace("/t=/", "", $temp);
        
            echo sprintf('%.1f'.$degree, $temp/1000);

            fclose($file);

            # header("refresh:1;url=index.php");
        ?>
    </div>
</body> 
</html>