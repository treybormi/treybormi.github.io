<?php
$opts = array(
  'https'=>array(
    'method'=>"POST")
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('https://api.instagram.com/oauth/access_token?client_id=3239305216171949&client_secret=897ef1175c13374095aa66c1de13683d&grant_type=authorization_code&redirect_uri=https://treybormi.github.io&code=IGQVJYZAGpPMndpVXJSbmZA3TmUtVlZA4bTk5NTRHRUZAXeGNxOVhteE9hbEZAZAT0hWaVJ0dDRWbEU3cFpPMUFad2hLdkwxcnBaYnh4Rkc2ZAjdrZAW9ZAcGptaEw2V3pDRmdPck85VFoydkhfT0VEbVQ2Q0xYQgZDZD', false, $context);
echo $file;
?>
