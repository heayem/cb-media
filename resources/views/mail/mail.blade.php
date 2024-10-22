<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2em;
            max-width: 100%;
            margin-bottom: 10px;
        }

        h3 {
            color: #333;
            font-size: 1.5em;
            margin-bottom: 8px;
        }

        p {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .message {
            border-top: 1px solid #ccc;
            padding-top: 10px;
            margin-top: 10px;
            font-size: 1.2em;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            max-width: 20%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://cbmedia-asia.com//image/cb_media.png" alt="cb_media Logo">
            <h1>CB MEDIA</h1>
        </div>

        <h1>Thank you for reaching out!</h1>
        <p>Hello, <strong>{{ $details['name'] }}</strong> just sent you a message from your Portfolio website.</p>
        <h3>Subject</h3>
        <p>{{ $details['subject'] }}</p>

        <h3>Email</h3>
        <p>{{ $details['email'] }}</p>

        <h3>Message</h3>
        <p class="message">{{ $details['message'] }}</p>
    </div>
</body>
</html>
