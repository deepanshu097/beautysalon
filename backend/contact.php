
<?php 
$Errname=$Errphone=$Erremail=$Errsubject=$Errmessage=null;
$name=$phone=$email=$subject=$message=$success=null;

function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$flag='true';
if(isset($_POST['submit'])){
   // validating name
   if(isset($_POST['name'])){

    if(empty($_POST['name'])){
        $Errname = "Name is required";
        $flag='false';
    }else{
        $name = test($_POST["name"]);
    }
   }
 // validating phone
   if(isset($_POST['phone'])){
    if(empty($_POST['phone'])){
        $Errphone = "phone number is required";
        $flag='false';
    }else{
        $phone = test($_POST["phone"]);
    }
   }
 // validating email
   if(isset($_POST['email'])){
    if(empty($_POST['email'])){
        $Erremail = "email address is required";
        $flag='false';
    }else{
        $email = test($_POST["email"]);
    }
   }
 // validating subject
   if(isset($_POST['subject'])){
    if (empty($_POST['subject'])) {
        $Errsubject = "Subject is required";
        $flag='false';
    } else {
        $subject=test($_POST['subject']);
    }

   }
 // validating message
    if(isset($_POST['message'])){

    if (empty($_POST['message'])) {
        $Errmessage = "Message is Required";
        $flag='false';
    } else {
        $message=test($_POST['message']);
    }

   }

   $ip_address=$_SERVER['REMOTE_ADDR'];
   $to_email="deepanshuyadav697@gmail.com";

   $mail_header = '<h3>client contacted</h3><br>'.'Name:'.$name.'\r\n Email:'. $email .'\r\n Phone:'.$phone.'\r\n Subject:'.$subject.'\r\n Message:'.$message.'\r\n';

   if($flag=='true'){
     include '../dbconnect.php';
    $sql="INSERT INTO contact_form(name,phone,email,subject,message,ip_address) VALUE('$name','$phone','$email','$subject','$message','$ip_address')";
    $result=mysqli_query($con,$sql);
    if($result){
      if(mail($to_email,$name,$mail_header)){
      $success="thanks for contacting us ";
    }
        header('location: /pages/success.php');

   }
}

}
?>