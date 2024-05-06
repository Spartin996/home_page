<?php

$uri = parse_url($_SERVER['REQUEST_URI']);


$map = [
    '/' => 'controllers/home_controller.php',





];

  if (array_key_exists($uri['path'], $map))
  {
    echo "you are on the home page!";
  } else
  {
    http_response_code(404);
    echo "404";
    exit();
  };