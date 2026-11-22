
<?php
    $name = "Rohit Nandavdekar";
    $serverTime = date("d M Y • h:i:s A");
    $phpVersion = phpversion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP × OpenShift | Cloud Deployment</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, Arial, Helvetica, sans-serif;
            background: #07111f;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Background */
        body::before {
            content: "";
            position: fixed;
            width: 600px;
            height: 600px;
            background: #00c7b7;
            filter: blur(180px);
            opacity: 0.12;
            top: -250px;
            left: -200px;
            z-index: -1;
        }

        body::after {
            content: "";
            position: fixed;
            width: 500px;
            height: 500px;
            background: #7c3aed;
            filter: blur(180px);
            opacity: 0.12;
            bottom: -250px;
            right: -150px;
            z-index: -1;
        }

        /* Navbar */
        nav {
            width: 100%;
            padding: 22px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            font-weight: 700;
        }

        .logo-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #00c7b7, #087f73);
            font-size: 20px;
        }

        .nav-badge {
            padding: 8px 15px;
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 30px;
            color: #b8c5d6;
            font-size: 13px;
            background: rgba(255,255,255,0.04);
        }

        /* Hero */
        .hero {
            min-height: 100vh;
            padding: 150px 7% 90px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-content {
            max-width: 1150px;
            width: 100%;
            margin: auto;
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 70px;
            align-items: center;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 30px;
            background: rgba(34,197,94,0.1);
            border: 1px solid rgba(34,197,94,0.25);
            color: #86efac;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background: #22c55e;
            border-radius: 50%;
            box-shadow: 0 0 12px #22c55e;
        }

        h1 {
            font-size: clamp(48px, 6vw, 78px);
            line-height: 1.02;
            letter-spacing: -3px;
            margin-bottom: 25px;
        }

        .gradient-text {
            background: linear-gradient(90deg, #00c7b7, #67e8f9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            max-width: 650px;
            color: #9fb0c5;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 22px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: 0.25s;
        }

        .btn-primary {
            background: #00a99d;
            color: white;
            box-shadow: 0 10px 30px rgba(0,199,183,0.2);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            background: #00bbae;
        }

        .btn-secondary {
            color: #dbeafe;
            border: 1px solid rgba(255,255,255,0.15);
            background: rgba(255,255,255,0.04);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.08);
        }

        /* Deployment Card */
        .deployment-card {
            padding: 28px;
            border-radius: 22px;
            background: rgba(255,255,255,0.055);
            border: 1px solid rgba(255,255,255,0.12);
            box-shadow: 0 30px 80px rgba(0,0,0,0.35);
            backdrop-filter: blur(15px);
        }

        .terminal-top {
            display: flex;
            gap: 7px;
            margin-bottom: 25px;
        }

        .terminal-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #64748b;
        }

        .terminal {
            background: #050b13;
            border-radius: 14px;
            padding: 25px;
            font-family: "Courier New", monospace;
            color: #94a3b8;
            font-size: 14px;
            line-height: 2;
            overflow: hidden;
        }

        .green {
            color: #4ade80;
        }

        .cyan {
            color: #67e8f9;
        }

        .purple {
            color: #c4b5fd;
        }

        .white {
            color: #f8fafc;
        }

        /* Features */
        .features {
            padding: 80px 7% 110px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title span {
            color: #00c7b7;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: bold;
        }

        .section-title h2 {
            font-size: 40px;
            margin-top: 12px;
        }

        .cards {
            max-width: 1150px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            padding: 30px;
            border-radius: 18px;
            background: rgba(255,255,255,0.045);
            border: 1px solid rgba(255,255,255,0.09);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-7px);
            border-color: rgba(0,199,183,0.4);
        }

        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,199,183,0.1);
            font-size: 25px;
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 19px;
            margin-bottom: 10px;
        }

        .card p {
            color: #8fa1b6;
            line-height: 1.7;
            font-size: 14px;
        }

        /* Server section */
        .server-section {
            padding: 30px 7% 100px;
        }

        .server-box {
            max-width: 1150px;
            margin: auto;
            padding: 35px;
            border-radius: 20px;
            background: linear-gradient(
                135deg,
                rgba(0,199,183,0.08),
                rgba(124,58,237,0.08)
            );
            border: 1px solid rgba(255,255,255,0.1);
        }

        .server-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        .server-item {
            padding: 20px;
            border-radius: 12px;
            background: rgba(0,0,0,0.18);
        }

        .server-item small {
            display: block;
            color: #718096;
            margin-bottom: 8px;
        }

        .server-item strong {
            color: #e2e8f0;
            font-size: 15px;
        }
    
.creator-name {
    font-size: 12px;
    font-weight: 500;
    color: #67e8f9;
    margin-top: 3px;
    letter-spacing: 0.3px;
}


        /* Footer */
        footer {
            padding: 30px 7%;
            border-top: 1px solid rgba(255,255,255,0.08);
            text-align: center;
            color: #64748b;
            font-size: 13px;
        }

        footer strong {
            color: #94a3b8;
        }

        /* Responsive */
        @media (max-width: 850px) {

            .hero-content {
                grid-template-columns: 1fr;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .server-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 130px;
            }

            h1 {
                letter-spacing: -2px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="logo">
        <div class="logo-icon">☁</div>
        <div>
            <div>PHP × OpenShift</div>
            <div class="creator-name">Deployed by Rohit Nandavdekar</div>
        </div>
    </div>

    <div class="nav-badge">
        Cloud Deployment Demo
    </div>
</nav>



<!-- HERO -->
<section class="hero">

    <div class="hero-content">

        <div>

            <div class="status">
                <span class="status-dot"></span>
                APPLICATION LIVE
            </div>

            <h1>
                Build.<br>
                Deploy.<br>
                <span class="gradient-text">Scale.</span>
            </h1>

            <p class="hero-description">
                A simple PHP application running as a containerized
                workload on Red Hat OpenShift — demonstrating how
                applications can move from local development to the cloud.
            </p>

            <div class="buttons">

                <a href="#deployment" class="btn btn-primary">
                    Explore Deployment →
                </a>

                <a href="#server" class="btn btn-secondary">
                    View Server Info
                </a>

            </div>

        </div>


        <!-- TERMINAL -->
        <div class="deployment-card">

            <div class="terminal-top">
                <span class="terminal-dot"></span>
                <span class="terminal-dot"></span>
                <span class="terminal-dot"></span>
            </div>

            <div class="terminal">

                <div>
                    <span class="cyan">$</span>
                    <span class="white"> oc get pods</span>
                </div>

                <div class="green">
                    ✓ php-app &nbsp;&nbsp; Running
                </div>

                <br>

                <div>
                    <span class="cyan">$</span>
                    <span class="white"> oc get route</span>
                </div>

                <div class="purple">
                    ✓ Route &nbsp;&nbsp; Exposed
                </div>

                <br>

                <div>
                    <span class="cyan">$</span>
                    <span class="white"> php --version</span>
                </div>

                <div class="green">
                    ✓ PHP <?php echo $phpVersion; ?>
                </div>

                <br>

                <div>
                    <span class="cyan">$</span>
                    <span class="white"> deployment status</span>
                </div>

                <div class="green">
                    ✓ SUCCESS
                </div>

            </div>

        </div>

    </div>

</section>


<!-- FEATURES -->
<section class="features" id="deployment">

    <div class="section-title">

        <span>Technology Stack</span>

        <h2>From Code to Cloud</h2>

    </div>


    <div class="cards">

        <div class="card">

            <div class="card-icon">🐘</div>

            <h3>PHP Application</h3>

            <p>
                A lightweight PHP application that generates
                dynamic content directly from the server.
            </p>

        </div>


        <div class="card">

            <div class="card-icon">📦</div>

            <h3>Containerized</h3>

            <p>
                The application runs inside a container,
                providing a consistent and portable environment.
            </p>

        </div>


        <div class="card">

            <div class="card-icon">🚀</div>

            <h3>OpenShift</h3>

            <p>
                OpenShift provides the platform to deploy,
                expose and manage the application in the cloud.
            </p>

        </div>

    </div>

</section>


<!-- SERVER INFO -->
<section class="server-section" id="server">

    <div class="server-box">

        <div class="section-title" style="text-align:left; margin-bottom:0;">

            <span>Live Environment</span>

            <h2>Server Information</h2>

        </div>


        <div class="server-grid">

            <div class="server-item">

                <small>Application</small>

                <strong>PHP on OpenShift</strong>

            </div>


            <div class="server-item">

                <small>PHP Version</small>

                <strong>
                    PHP <?php echo $phpVersion; ?>
                </strong>

            </div>


            <div class="server-item">

                <small>Server Time</small>

                <strong>
                    <?php echo $serverTime; ?>
                </strong>

            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->
<footer>

    <p>
        Built & deployed by
        <strong><?php echo $name; ?></strong>
    </p>

    <p style="margin-top:8px;">
        PHP • Containers • Red Hat OpenShift
    </p>

</footer>

</body>
</html>

