<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Portfolio Website</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        html {
            font-size: 62.5%;
        }

        body {
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
            background-color: black;
            color: white;
        }

        header {
            margin-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 9%;
            background-color: transparent;
            filter: drop-shadow(10px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 3rem;
            color: #b74b4b;
            font-weight: 800;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        nav a {
            font-size: 1.8rem;
            color: white;
            margin-left: 4rem;
            font-weight: 500;
            transition: 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        nav a:hover,
        nav a.active {
            color: #b74b4b;
            border-bottom: 3px solid #b74b4b;
        }

        @media(max-width: 995px) {
            nav {
                position: absolute;
                display: none;
                top: 0;
                right: 0;
                width: 40%;
                border-left: 3px solid #b74b4b;
                border-bottom: 3px solid #b74b4b;
                border-bottom-left-radius: 2rem;
                padding: 1rem solid;
                background-color: #161616;
                border-top: 0.1rem solid rgba(0, 0, 0, 0.1);
            }

            nav.active {
                display: block;
            }

            nav a {
                display: block;
                font-size: 2rem;
                margin: 3rem 0;
            }

            nav a:hover,
            nav a.active {
                padding: 1rem;
                border-radius: 0.5rem;
                border-bottom: 0.5rem solid #b74b4b;
            }
        }

        section {
            min-height: 100vh;
            padding: 5rem 9% 5rem;
        }

        .home {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8rem;
            background-color: black;
        }

        .home .home-content h1 {
            font-size: 6rem;
            font-weight: 700;
            line-height: 1.3;
        }

        span {
            color: #b74b4b;
        }

        .home-content h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .home-content p {
            font-size: 1.6rem;
        }

        .home-img {
            border-radius: 50%;
        }

        .home-img img {
            position: relative;
            width: 16vw;
            border-radius: 50%;
            box-shadow: 0 0 25px solid #b74b4b;
            cursor: pointer;
            transition: 0.2s linear;
        }

        .home-img img:hover {
            font-size: 1.8rem;
            font-weight: 500;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 4rem;
            height: 4rem;
            background-color: transparent;
            border: 0.2rem solid #b74b4b;
            font-size: 2rem;
            border-radius: 50%;
            margin: 3rem 1.5rem 3rem 0;
            transition: 0.3s ease;
            color: #b74b4b;
        }

        .social-icons a:hover {
            color: black;
            transform: scale(1.3) translateY(-5px);
            background-color: #b74b4b;
            box-shadow: 0 0 25px #b74b4b;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.8rem;
            background-color: black;
            border-radius: 4rem;
            font-size: 1.6rem;
            color: #b74b4b;
            letter-spacing: 0.3rem;
            font-weight: 600;
            border: 2px solid #b74b4b;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .btn:hover {
            transform: scale3d(1.03);
            background-color: #b74b4b;
            color: black;
            box-shadow: 0 0 25px #b74b4b;
        }

        .typing-text {
            font-size: 34px;
            font-weight: 600;
            min-width: 280px;
        }

        .headersss {
            font-size: 28px !important;
            font-weight: 600;
            min-width: 280px;
            color: #b74b4b;
        }

        .Data {
            font-size: 12px !important;
            font-weight: 600;
            min-width: 280px;
            color: white !important;
        }

        td {
        padding: 5px 5px; 
        }

        .typing-text span {
            position: relative;
        }

        .typing-text span::before {
            content: "Quiet Person";
            color: #b74b4b;
            animation: words 20s infinite;
        }

        .typing-text span::after {
            content: "";
            background-color: black;
            position: absolute;
            width: calc(100% + 8px);
            height: 100%;
            border-left: 3px solid black;
            right: -8;
            animation: cursor 0.6s infinite;
        }

        @keyframes cursor {
            to {
                border-left: 3px solid #b74b4b;
            }
        }

        @keyframes words {
            0%, 33% {
                content: "Undergraduate Student";
            }

            34%, 67% {
                content: "On Time Person";
            }

            /*41%, 60% {
                content: "Web Designer";
            }

            61%, 80% {
                content: "Youtuber";
            }

            81%, 100% {
                content: "Script Writer";
            }*/
        }

        @media (max-width: 1000px) {
            .home {
                gap: 4rem;
            }
        }

        @media(max-width: 995px) {
            .home {
                flex-direction: column;
                margin: 5rem 4rem;
            }

            .home .home-content h3 {
                font-size: 2.5rem;
            }

            .home-content h1 {
                font-size: 5rem;
            }

            .home-img img {
                width: 16vw;
                margin-top: 4rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="logo">Hans</a>
        <nav>
            <a href="#" class="active"> Home</a>
            <a href=https://drive.google.com/file/d/10jrs2VBFjpSkrR1bPrJM3vJC49birjPC/view?usp=drive_link>Achievement</a>
            <a href=https://drive.google.com/file/d/10jrs2VBFjpSkrR1bPrJM3vJC49birjPC/view?usp=drive_link>Skills</a>
            <a href=https://drive.google.com/file/d/10jrs2VBFjpSkrR1bPrJM3vJC49birjPC/view?usp=drive_link>Education</a>
            <a href=https://drive.google.com/file/d/10jrs2VBFjpSkrR1bPrJM3vJC49birjPC/view?usp=drive_link>Experience</a>
            <a href=https://wa.me/62895428773636>Contact</a>
        </nav>
    </header>

    <section class="home">
        <div class="home-img">
            <img src="main.png" alt="">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>Hans Sanjaya Yantono</span></h1>
            <h3 class="typing-text">I'm a <span></span></h3>
            <br>
            <h3 class="headersss">Profile</h3>
            <table class="Data">
                <tr>
                    <td>Full Name </td>
                    <td>:</td>
                    <td>Hans Sanjaya Yantono</td>
                </tr>
                <tr>
                    <td>Place and Birth Date </td>
                    <td>:</td>
                    <td>Surabaya, 8 February 2005</td>
                </tr>
                <tr>
                    <td>Gender </td>
                    <td>:</td>
                    <td>Male</td>
                </tr>
                <tr>
                    <td>Religion </td>
                    <td>:</td>
                    <td>Catholic</td>
                </tr>
                <tr>
                    <td>Status </td>
                    <td>:</td>
                    <td>Not Married yet</td>
                </tr>
                <tr>
                    <td>Staff </td>
                    <td>:</td>
                    <td>Schematics BST Staff</td>
                </tr>
                <tr>
                    <td>Citizenship </td>
                    <td>:</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td>Hobby </td>
                    <td>:</td>
                    <td>Learning Language, Watch Movie, Listen to Music</td>
                </tr>
            </table><br>

            <h3 class="headersss">Education</h3>
            <table class="Data">
                <tr>
                    <td>Elementary School</td>
                    <td>SD Santo Carolus Surabaya</td>
                    <td>2011-2017</td>
                </tr>
                <tr>
                    <td>Junior High School</td>
                    <td>SMP Kristen Petra 5 Surabaya</td>
                    <td>2017-2020</td>
                </tr>
                <tr>
                    <td>Senior High School</td>
                    <td>SMA Kristen Petra 5 Surabaya</td>
                    <td>2020-2023</td>
                </tr>
                <tr>
                    <td>High School</td>
                    <td>Institute Technology of Sepuluh Nopember</td>
                    <td>2023-now</td>
                </tr>
            </table><br>

            <h3 class="headersss">General</h3>
            <table class="Data">
                <tr>
                    <td>Phone Number </td>
                    <td>:</td>
                    <td>+62895428773636</td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td>hanssanjayay@gmail.com</td>
                </tr>
                <tr>
                    <td>Quotes </td>
                    <td>:</td>
                    <td>Be Yourself and Never Surrender</td>
                </tr>
            </table><br>

            <div class="social-icons">
                <a href=https://www.linkedin.com/in/hans-yantono-3gg><i class="fa-brands fa-linkedin"></i></a>
                <a href=https://github.com/hansits034><i class="fa-brands fa-github"></i></a>
                <a href=https://www.twitter.com/HansSanjayaY><i class="fa-brands fa-x-twitter"></i></a>
                <a href=https://www.instagram.com/hans.anja.y.a?igsh=dnp1bHl0bHJybG9q><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href=https://wa.me/62895428773636 class="btn">Chat Me</a>
        </div>
    </section>
</body>
</html>
