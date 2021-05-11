<?php
$name = $_REQUEST['name'];
$mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];

if (empty($name) || empty($mobile) || empty($email) || empty($address))
{
    echo "please fill all the fields";
}
else{
    mail("rajakmr913@gmail.com", "webtech message", "form: $name <$email>");
    echo "<script type = 'text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
?>