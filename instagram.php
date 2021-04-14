<?php
$opts = array(
  'https'=>array(
    'method'=>"POST",
    'header'=>"client_id: 3239305216171949\r\n". 
              "client_secret: 897ef1175c13374095aa66c1de13683d\r\n".
              "grant_type: authorization_code\r\n".
              "redirect_uri: https://treybormi.github.io\r\n".
              "code: AQDrPjvRDGmJHyiViZYjAsOhtEHVIJqlcGKIEMGlRqkGWBkI1Wr8qUS5Fzk_ZkbMVCFf1Sfb7K7Rv189Gdj2nqFqpAKSfqfvCSVvkilqwLJveZdG7Kj_UdfM0aey_xd8-DgnyyGVRxoP052JhjpU__blIjw1QOlh9CK_IzTmGKaiLmlmfZT4F6ScbrqVGHn9VbK6bRxy07yeTAXeaZs0K3uHxq-gqC6MI5UXC0gYEZIxhg\r\n"
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('https://api.instagram.com/oauth/access_token', false, $context);
echo $file;
?>
