<?php
//Member insert
if($_POST['insertType'] === 'Member') {
    $name = $_POST['NAMESURNAME'];
    $email = $_POST['EMAIL'];
    $phone = $_POST['PHONE'];
    $password = $_POST['PASSWORD1'];
    $news = $_POST['NEWS'];
    $sql="select TITLE from member WHERE NAME_SURNAME='$name' and STATUS=1";
    $result  =mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);

    if ($rowcount>0)
    {
    echo "Bu isimde üye daha önce kayıt edilmiştir.";
    } 
    else
    {
    $sqlinsert="INSERT INTO member (NAME_SURNAME,EMAIL,PHONE,STATUS,NEWS)
    VALUES ('$name','$email',$phone,1,$news)";
    echo $sqlinsert;
    $result=mysqli_query($conn,$sqlinsert);
    echo $result;
    if ($result==0)
    echo "Eklenemedi, kontrol ediniz";
    else
    echo "Başarıyla eklendi";
    };
}
?>