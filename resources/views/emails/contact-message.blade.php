<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Contact</title>
</head>
<body>
    <div>
        <h1>Email From: {{ $name }} | {{ $email }}</h1>
        <div>
            <h2>Subject: {{ $subject }}</h2>
            <div>
                <h3>Message:</h3>
                <p>{{ $message_contact }}</p>
            </div>
        </div>
    </div>
</body>
</html>