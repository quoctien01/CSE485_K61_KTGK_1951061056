<?php
if(isset($_POST['btthem']))
{
    $id=$_POST['id'];
    $ten=$_POST['ten'];
    $ho=$_POST['ho'];
    $ns=$_POST['ns'];
    $Gt=$_POST['gt'];
    $sdt=$_POST['sdt'];
    $email=$_POST['email'];
    $cao=$_POST['cao'];
    $nang=$_POST['nang'];
    $nhommau=$_POST['nhommau'];
    $ngaylapso=$_POST['ngaylapso'];
    $ngaycapnhat=$_POST['ngaycapnhat'];
    include('connect.php');
    
    $sql = "INSERT INTO PATIENT(patientid, firstname, lastname, 
    dateofbirth, gender , mobile, email, height, 'weight',
    blood_type, created_on, modified_on)
    VALUES ('$id','$ten','$ho','$ns','$gt','$sdt,'$email','$cao','$nang',
    '$nhommau','$ngaylapso','$ngaycapnhat)";


if (mysqli_query($conn, $sql)) 
{
echo "New record created successfully";
}
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location:index.php");
mysqli_close($conn);
}

?>