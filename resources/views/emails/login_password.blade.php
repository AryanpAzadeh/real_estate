<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اطلاعات ورود</title>
</head>
<body style="text-align: right">
<h1>اطلاعات ورود به سامانه برای {{ $MailData['name'] }}</h1>
<p>نام کاربری : {{ $MailData['username'] }}</p>
<p>رمز عبور : <span style="text-align: left">{{ $MailData['password'] }}</span></p>
</body>
</html>
