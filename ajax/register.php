<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
      header('Content-Type: application/json');
      $return = [];

    // Make sure the user does not exist.

    // Make sure the user CAN be added AND is added.

    // Return the proper information back to JavaScript to redirect us.

    $return['redirect'] = '/dashboard.php';
    $return['name'] = "Johnny Bravo";

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
  } else {
    exit('test');
  }
?>