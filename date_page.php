
<html>
<head>
    <meta charset="UTF-8">
    <title>example</title>
</head>
<body>
<?php
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    $today = date('Y-m-d');
?>
일반적인 HTML의 형태입니다.<br>
올해는 <?php echo $year; ?>년 입니다.<br>
지금은 <? echo $month; ?>월 입니다.<br>
오늘은 <?= $day; ?>일 입니다.<br>
오늘 날짜는 <script language="php"> echo $today; </script> 입니다.
</body>
</html>