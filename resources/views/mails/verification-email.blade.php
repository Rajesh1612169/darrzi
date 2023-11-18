<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification Email</title>
</head>
<body>
    <h3>Click Link Below To Verify Account !</h3>
    <p>
        <a href="{{route('account.verification', $mailData)}}">{{route('account.verification', encrypt($mailData))}}</a>
    </p>
</body>
</html>
