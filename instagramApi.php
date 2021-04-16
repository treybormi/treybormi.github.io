<?php
$url = "https://graph.instagram.com/me?fields=id,username&access_token=IGQVJVWHRGOFZANWkJZAZAmJJWWFtdjZADd0I5Q2xuVUlwZAy1pSFJoTkFwWHVVTVJoS0ZAPZAWoyb29YWkVHOXRpUU9uZADh1dFk1MU1vdnc4dWNPUXVuaFVFS19mWlJ3ZA3B3MW16dV9ROEE5V05YSmxXRmx1NgZDZD";
$result = file_get_contents($url);
$result = json_decode($result,true);
?>
