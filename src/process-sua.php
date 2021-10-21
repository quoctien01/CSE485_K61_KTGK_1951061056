
<?php
if(isset($_POST['btsua'])){
   
    include('connect.php');
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

    $sql = "UPDATE PATIENT SET (patientid= '$id', firstname='$ten', lastname='$ho', 
    dateofbirth='$ns', gender ='$Gt', mobile='$sdt', email='$email', height='$cao',weight='$nang',
    blood_type='$nhommau', created_on='$ngaylapso', modified_on $ngaycapnhat WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}