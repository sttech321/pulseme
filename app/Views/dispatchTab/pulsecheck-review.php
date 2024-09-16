<!DOCTYPE html>
<html>
<head>
<title><?= $title ?? 'SummitRA' ?></title>
<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('/image/summitRA.jpeg')?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: blue;
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .link {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #0056b3;
            color: #fff !important;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .link:hover {
            background-color: #003d80;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

     </style>
</head>
<body>
    <div class="container">
        <h1>Pulsecheck Review</h1>
        <p>Dear Customer,</p>
        <p>Here is the pulsecheck review link. Please click this link to send the reviews:</p>
        <p><a class="link" href="<?= $link ?>">Review link</a></p>
        <p>Thank you,</p>
        <p>SummitRA Team</p>
        <div class="footer">
            &copy; 2024 SummitRA. All rights reserved.
        </div>
    </div>
</body>
</html>
