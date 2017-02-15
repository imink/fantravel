<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
<body>
  姓名 : {{ $name }}
  <br>
  性别: {{ $gender == '1' ? '男' : '女' }}
  <br>
  微信: {{ $wechat }}
  <br>
  手机: {{ $phone }}
  <br>
  微信号: {{ $wechat }}
  <br>
  目的地: {{ $destination }}
  <br>
  时间: {{ $duration }}
  <br>
  人数: {{ $people }}
  <br>
  其他要求: {{ $others }}

</body>
</html>