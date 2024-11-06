<?php

//$conn=new mysqli("sql300.epizy.com","epiz_34235582","kLGJiFhRh81Oub","epiz_34235582_scms");
$conn = new mysqli("sql101.infinityfree.com","	if0_34452243","fntfUZInZh2mPdj","if0_34452243_foodorderingsystem");

if($conn->connect_error)
{
    echo " Connection Failed";
    die;
}

?>