<?php

function dd($var) {
  echo "<pre> ";
  echo var_dump($var);
  echo " </pre>";
  exit();
}