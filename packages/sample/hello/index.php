<?php
 
 include_once "utils.php";

  function main(array $args) : array
  {
      $greeting = "Good ";  
      $value = commonFunction();

      echo "$value";
      $response = $greeting.$value;
      
      return ["body" => $response];
  }
?>