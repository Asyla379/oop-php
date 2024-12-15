<?php
include"init.php";


//$data= DB::table('users')->select()->all();
$data= DB::table('users')->select()->where();


print_r($data);