<?php

$this_is_a_map = ["first_value"=>"0",
"second_value"=>"1",
"third_value"=>"2",
"fourth_value"=>"3"
];

//echo $this_is_a_map["third_value"];

array_map (function($temp_map){echo $temp_map . "\n";}, $this_is_a_map);
$this_is_a_map["second_value"]=47;
array_map (function($temp_map){echo $temp_map . "\n";}, $this_is_a_map);
