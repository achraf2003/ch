<?php
    //$proxies = array( '45.57.170.199:8800', '45.57.170.227:8800', '147.78.53.137:8800', '45.57.170.100:8800', '147.78.53.80:8800', '45.57.170.36:8800', '45.57.170.10:8800', '45.57.170.74:8800' );

    // Pick a random proxy:
    //$proxy_to_use = $proxies[ rand( 0, count( $proxies ) - 1 ) ];

$aContext = array(
    'http' => array(
        'header'  => 'User-agent: REDLINECLIENT Google google Pixel 2 1.0.02',
        //'proxy'           => 'tcp://' . $proxy_to_use,
        'request_fulluri' => true,
    ),
);
$cxContext = stream_context_create($aContext);


$site = 'https://vtpii.com/ch/allch.php';
$homepage = file_get_contents($site, False, $cxContext);
$filename = 'allch.php';
$handle = fopen($filename,"w");
fwrite($handle,$homepage);
echo "Success";
fclose($handle);
