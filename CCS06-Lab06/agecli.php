<?php
$name = $argv[1];
$year = $argv[2];

function vtr($name,$year){
$current_year = date("Y");
$age = $current_year - $year;
echo "Your name is " . $name . " and your age is " . $age . "\n";


if($age >= 18)
{
echo "You are a voter\n";
}else
{
echo "You are not a voter\n";
}


if ($age >= 60)
{
echo "You are a senior citizen";
}

}
vtr($name,$year);
?>
