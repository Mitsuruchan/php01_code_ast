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
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h3>お客様アンケート</h3>
        <ul>
            <li>お客様へ</li>
            <li>弊社サービスをご利用頂きましてありがとうございます。</li>
            <li>以下のアンケートにお答え頂くと抽選でクオカード500円分が当たります！是非、アンケートにご協力ください。</li>
            <li>抽選で当たった場合、１週間でご入力頂いたご住所に発送させて頂きます。</li>
        </ul>
    </div>
    

    <form action="post_confirm.php" method="post">
    
    <table>
    <tr>
    <th>お名前</th>
    <td><input type="text" name="name"></td>
    </tr>
    <th>性別</th>
    <td><label for="male"><input type="radio" name="gender" id="male" value="男性">男性</label><br><label for="female"><input type="radio" name="gender" id="female" value="女性">女性</label><br><label for="other"><input type="radio" name="gender" id="other" value="回答しない">回答しない</label></td>
    </tr>
    <tr>
    <th>郵便番号</th>
    <td><input type="text" name="zip"></td>
    </tr>
    <th>ご住所</th>
    <td><input type="text" name="adress"></td>
    </tr></tr>
    <th>EMAIL</th>
    <td><input type="text" name="mail"></td>
    </tr>
    <th>PASS</th>
    <td><input type="text" name="password"></td>
    </tr>
    <th>弊社サービスをご利用頂いた感想</th>
    <td><textarea name="question" cols="50" rows="4" ></textarea></td>
    </tr>
    </table>





    <input type="submit" value="送信">
    </tr>
    </table>
    </form>

   
    <script>alert("ok");
     function h($val)

    return htmlspecialchars($val,ENT_QUOTES);
  </script>
   
   


     
</body>

</html>
