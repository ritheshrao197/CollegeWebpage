<?php
//variable settings
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['Message'];
//check input
if(empty($name)||empty($email)||empty($message)){
    echo "Please fill all the fields"
}else{
    mail("nitheshurao@gmail.com","Webtech Message",$message,"From:$name<$email>");
    echo "<script type='text/javascript'>alert( 'your message sent successfully )
    window.history.log(-1);
    </script>";
}

?>