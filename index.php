```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP on OpenShift</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e3a5f, #0f766e);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 900px;
            text-align: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 24px;
            padding: 50px 35px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
        }

        .icon {
            font-size: 65px;
            margin-bottom: 20px;
        }

        .badge {
            display: inline-block;
            background: #16a34a;
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .subtitle {
            font-size: 19px;
            color: #dbeafe;
            margin-bottom: 35px;
            line-height: 1.6;
        }

        .highlight {
            color: #67e8f9;
            font-weight: bold;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 30px;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 15px;
            padding: 20px 10px;
        }

        .info-box .emoji {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .info-box h3 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .info-box p {
            font-size: 14px;
            color: #cbd5e1;
        }

        .php-message {
            margin-top: 35px;
            padding: 18px;
            border-radius: 12px;
            background: rgba(0, 0, 0, 0.2);
            font-size: 17px;
        }

        .footer {
            margin-top: 25px;
            font-size: 13px;
            color: #cbd5e1;
        }

        @media (max-width: 700px) {
            h1 {
                font-size: 30px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 35px 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <div class="icon">☁️</div>

        <div class="badge">
            ● APPLICATION RUNNING
        </div>

        <h1>PHP Application on OpenShift</h1>

        <p class="subtitle">
            Welcome to my cloud deployment demo!
            <br>
            This application is successfully
            <span class="highlight">deployed and running on OpenShift.</span>
        </p>

        <?php
            $name = "Rohit Nandavdekar";
            $currentTime = date("d M Y, h:i:s A");
        ?>

        <div class="php-message">
            👋 Hello, <strong><?php echo $name; ?></strong>!
            <br><br>
            <span style="color:#94a3b8;">
                PHP is successfully executing on the server.
            </span>
        </div>

        <div class="info-grid">

            <div class="info-box">
                <div class="emoji">🐘</div>
                <h3>PHP</h3>
                <p>Backend Runtime</p>
            </div>

            <div class="info-box">
                <div class="emoji">🚀</div>
                <h3>OpenShift</h3>
                <p>Cloud Platform</p>
            </div>

            <div class="info-box">
                <div class="emoji">☁️</div>
                <h3>Deployment</h3>
                <p>Cloud Hosted</p>
            </div>

        </div>

        <div class="footer">
            Server Time: <?php echo $currentTime; ?>
            <br><br>
            Built & Deployed by <strong><?php echo $name; ?></strong>
        </div>

    </div>

</div>

</body>
</html>
```
