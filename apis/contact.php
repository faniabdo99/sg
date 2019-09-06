<?php
 header("Access-Control-Allow-Origin: *");
 if(isset($_GET['ContactSection']) && $_GET['ContactSection'] == 'contact'){
    //Gather Message Information
    $SenderName = $_GET['SenderName'];
    $SenderContactMethod = $_GET['SenderContactMethod'];
    $SenderMessage = $_GET['SenderMessage'];
    if(empty($SenderName) or empty($SenderContactMethod) or empty($SenderMessage)){
        echo "<p class='form-response danger'>Sorry , You must fill in all fields</p>";
    }else{
        //Do Send The Message
        $Message = "From : " . $SenderName ." < ".$SenderContactMethod." > "."\n".$SenderMessage;
        $SendEmail = mail('semicolongroup2017@gmail.com', 'New Message From Contact Us Section', $Message );
        if($SendEmail){
          echo "<p class='form-response success'>your message has been recived , will contact you in less than 24 hours</p>";
        }else{
          echo "<p class='form-response danger'>Something wrong with mail server , try again later</p>";
        }
    }
}elseif(isset($_GET['ContactSection']) && $_GET['ContactSection'] == 'request'){

  //Gather Message Information
  $SenderName = $_GET['SenderName'];
  $SenderContactMethod = $_GET['SenderContactMethod'];
  $SenderMessage = $_GET['SenderMessage'];
  $ProjectType = $_GET['ProjectType'];
  if(empty($SenderName) or empty($SenderContactMethod) or empty($SenderMessage) or empty($ProjectType)){
      echo "<p class='form-response danger'>Sorry , You must fill in all fields</p>";
  }else{
      //Do Send The Message
      $Message = "From : " . $SenderName ." < ".$SenderContactMethod." > "."\n".$SenderMessage . "\n" . "Project Type :" . $ProjectType;
      $SendEmail = mail('semicolongroup2017@gmail.com', 'New Message From Contact Us Section', $Message );
      if($SendEmail){
        echo "<p class='form-response success'>your message has been recived , will contact you in less than 24 hours</p>";
      }else{
        echo "<p class='form-response danger'>Something wrong with mail server , try again later</p>";
      }
  }

}else{

  echo "<p class='form-response danger'>No request has been made</p>";
}
?>
