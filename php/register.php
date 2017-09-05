<?php

  require('./connect.php');
  $email = $_POST['email'];

  try {
      $stmt = $conn->prepare("INSERT INTO emails(email) VALUES (:email)");
      $stmt->execute(array("email" => $email));
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $conn->connection = null;

  header('location: ../index');
?>
