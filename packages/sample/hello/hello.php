<?php

include_once "index.php";
  function main(array $event) : array
  {
      $name = $event["name"] ?? "stranger";
      $greeting = "Hello $name!";
      echo $greeting;
      return ["body" => $greeting];
  }
