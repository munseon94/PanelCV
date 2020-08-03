$name_01=$_POST['name'];
$mail_02=$_POST['email'];
$msg_03=$_POST['message'];

$to='moonsk100pro@naver.com';
$msg="보낸사람:$name_01\n".
  "보낸사람 메일주소:$mail_02\n".
  "메일내용:$msg_03";
  
$sendmail=mail($to,$msg);  
