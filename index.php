<?php
include"init.php";


$array['username']="Mary1";
$array['password']="passnig";
$array['email']="marynig@gmail.com";

User::action()->update_by_id($array,2);

$data = User::action()->get_all();


echo "<pre>";
print_r($data);