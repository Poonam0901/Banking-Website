<?php 
session_start();

 $con = mysqli_connect('localhost', 'root', '');

 mysqli_select_db($con, 'bankkk');
 $Card_holder_name = $_POST['Card_holder_name'];
 
 $Card_Number = $_POST['Card_Number'];
 $Expiry_date = $_POST['Expiry_date'];
 $CVV = $_POST['CVV'];
 $Amount = $_POST['Amount'];
 $s = " select * from branchhh where Card_holder_name = '$Card_holder_name' ";
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 if($num == 1){
	 echo "problem occur";
 	}
 else{
	 $reg= "insert into branchhh(Card_holder_name, Card_Number, Expiry_date, CVV, Amount) values('$Card_holder_name', '$Card_Number', '$Expiry_date','$CVV', '$Amount')";
	 mysqli_query($con, $reg);
 	echo " Transaction Done Successful"; 
	header('location:payment.html');
	 
}
?>