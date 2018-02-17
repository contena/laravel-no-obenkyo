<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
テストテスト
<?php echo $message; ?>
<form action="unko" method="post">
  {{ csrf_field() }}
  <input type="text" name="test">
  <input type="submit" value="送信">
</form>
<a href="/unko">unko</a>
</body>
</html>
