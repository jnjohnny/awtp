<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello, {{ $email_data['name'] }}</h1>
    <h1>Welcome to BillMan</h1>
    <a href="http://127.0.0.1:8000/verifycred?code={{ $email_data['verification_code'] }}">Click Here to verify your account</a>
</body>
</html>