<?php
 
 # require_once('./../../../lib/utils.php');
  include_once "utils.php";

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = "hello there";
      
#      $value = commonFunction();

 #     echo $value;
      // $greeting2 = testSameFolder($greeting);
      error_log("Start");
      echo "test message";
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting];
      // return ["body" => $greeting ];
  }
?>