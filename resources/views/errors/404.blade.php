<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .code {
            border-right: 2px solid;
            font-size: 26px;
            padding: 0 15px 0 15px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }
        .btn {
            text-decoration: none; padding-left: 30px;padding-right: 30px; padding-top: 10px; padding-bottom: 10px; color: white; background-color: #888888; border-radius: 15px; font-weight: 600;
        }
        .btn:hover{
            opacity: 80%;
        }
    </style>
</head>

<body>
    <div style="height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div style="display: flex;">
            <div class="code">
                404
            </div>
            <div class="message" style="padding: 10px;">
                Not Found
            </div>
        </div>
        <div class="rounded-sm" style="margin-top: 20px;">
            <a href="#" onclick="history.back()" class="btn">Kembali</a>
        </div>
    </div>
</body>

</html>