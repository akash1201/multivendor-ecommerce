<?php

$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
// echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';

// echo($query['country']);
$_SESSION['user_location']=$query['country'];
}
else{
     $c="United States";
    $_SESSION['user_location']=$c;
}


// foreach ($query as $data) {
//     echo $data . "<br>";
// }



?>