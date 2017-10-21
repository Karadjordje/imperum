<?php

  if($_POST) {

    // recipient email
    $to_email = "sveljod@gmail.com";

    // check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

      //create JSON data
      $output = json_encode(array(
        'type'=>'error',
        'text' => 'Sorry Request must be Ajax POST'
      ));

      //exit script outputting json data
      die($output);
    }

    // sanitize input data using PHP filter_var().
    $user_name  = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $user_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
    $subject    = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message    = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
    $from = $user_name.' <'.$user_email.'>';

    function getRealIp() {

      //check ip from share internet
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
      }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        // to check ip is pass from proxy
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      else {
        $ip=$_SERVER['REMOTE_ADDR'];
      }
      return $ip;
    }

    // get the IP from superglobal
    $ip = getRealIp();

    // try to locate the host
    $host = gethostbyaddr($ip);
    $date = date('l jS F Y h:i:s A');

    //additional php validation
    if(strlen($user_name)<3){

      // if length is less than 3 it will output JSON error
      $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty'));
      die($output);
    }
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){

      //email validation
      $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email'));
      die($output);
    }
    if(strlen($subject)<1){

      //check emtpy subject
      $output = json_encode(array('type'=>'error', 'text' => 'Subject is too short or empty'));
      die($output);
    }
    if(strlen($message)<3){

      //check emtpy message
      $output = json_encode(array('type'=>'error', 'text' => 'Too short message! Please enter something.'));
      die($output);
    }

    // message
    $message = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
              <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                  <title>Poruka sa sajta</title>
              </head>
              <body yahoo="fix">

<p>Subject: '.$subject.'</p>
<p>Name: '.$user_name.'</p>
<p>Email: '.$user_email.'</p>
<p>Message: '.$message.'</p>
...
<p><small>IP: '.$ip.'<br />
Host: '.$host.'</small><br />
Date: '.$date.'</small></p>



</body>
</html>';
    // to send HTML mail, the Content-type header must be set
    $headers   = array();
    $headers[] = 'From:' .$to_email;
    $headers[] = 'Reply-to:'.$user_email;
    $headers[] = "MIME-Version: 1.0";
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] =  'X-Mailer: PHP/' . phpversion();

    //email body
    $send_mail = mail($to_email, $subject,  $message, implode("\r\n", $headers));

    if(!$send_mail) {
      // of mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
      $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail. Please check your PHP mail configuration.'));
      die($output);
    }
    else {
      $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .'. Thank you for your email'));
      die($output);
    }

  }
?>

