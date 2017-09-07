<?php 
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    http_response_code(200);

    $result = array(
      'errorMessage' => 'Falló',
      'error' => 'OK'
    );

    echo "OK";
    //echo json_encode($result); 
    /*
    {
      error: "Fallo el email',
      result: ''
    }
    */
  }
?>