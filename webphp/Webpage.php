<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <?php
    echo "<h1 class = 'titlee'> Profile </h1><br/>";
    echo "<p class = 'Profile'></p>";
    echo "<img class='img' src='my.jpg'></a>";
    $image = "my.jpg";
    $name = "นางสาวณิชาภา เรืองอุไร";
    $birthday = "15 สิงหาคม พ.ศ.2547";
    $university = "ปัจจุบันศึกษาอยู่ มหาวิทยาลัยพระจอมเกล้าพระนครเหนือ";
    $faculty = "FITM";
    $branch = "IT";
    $stdid = "6606021630029";
    $school = "Chalermkwansatree school";
    
    echo "</br>";
    echo "ชื่อ $name </br>";
    echo "วันเกิด $birthday </br>";
    echo "ปัจจุบันศึกษาอยู่ $university </br>";
    echo "คณะ $faculty สาขา $branch รหัสนักศึกษา $stdid </br>";
    echo "เคยศึกษาอยู่ $school </br>";
    echo "</br>";

    
    echo "<p class = 'Down' </p>";
    $ig = "kan_nchp";
    $email = "kannchp@gmail.com";
    echo "IG : $ig </br>";
    echo "EMAIL : $email </br>";
    
    ?>
</body>
</html>