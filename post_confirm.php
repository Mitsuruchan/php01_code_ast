<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$zip = $_POST['zip'];
$adress = $_POST['adress'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$question= $_POST['question'];



// 変数を用意
$time = date("Y-m-d H:i:s");

// $timeや$nameをファイルに書き込む際、区切り文字として、 /(スラッシュ)を結合しています。
$str = $time . ' / ' . $name . ' /' .  $mail . ' ' . $question;

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $str . "\n");
fclose($file);

?>

<html>
<style>
table {
  border-collapse: collapse;
  border: 2px solid #95C300;
}
th, td {
  border: 1px solid #95C300;
  padding: 5px 10px;
}
th {
  background: #EBF4C9;
  text-align:center;
}
td {
  width: 300px;
}
</style>



<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
<h3>ご回答ありがとうございました。</h3>
<p>以下の内容で送信致しました。</p>
<table>
<tr>
<th>名前：</th>
<<td><?= ($name) ?></td>
</tr>
<tr>
<th>性別：</th>
<<td><?=($gender)?></td>
</tr>
<tr>
<th>郵便番号：</th>
<<td><?=($zip)?></td>
</tr>
<tr>
<th>ご住所：</th>
<<td><?=($adress)?></td>
</tr>
<tr>
<th>EMAIL：</th>
<<td><?=($mail)?></td>
</tr>
<tr>
<th>パスワード：</th>
<<td><?=($password)?></td>
</tr>
<tr>
<th>感想：</th>
<<td><?=($question)?></td>
</tr>
</table>

<?php
$rand = rand(1, 2);
 echo '<br>';
if ($rand === 1) {
 echo 'おめでとうございます！クオカード500円分があたりました。後日弊社より発送させて頂きます。';
} else {
 echo 'ご協力ありがとうございました。誠に勝手ながら、今回、クオカードプレゼントはございません。今後ともよろしくお願いいたします。';
}
 ?>



    
</body>

</html>
