<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/g.png" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Home Page</title>
</head>


<style>
    .navbar {
        justify-content: end;
        backdrop-filter: blur(5px);
        background-color: rgba(255, 255, 255, 0.5);
        width: 100%;
    }

    .navlinks {
        color: #686868;
    }

    .navlinks:hover {
        color: #404040;
    }

    .aboutme {
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
        width: 50%;
        color: #686868;
    }




    /* SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL  */
    /* SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL  */
    /* SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL  */
    @media (max-width: 600px) {
        .navbar {
            justify-content: end;
        }

        .container .aboutme {
            width: 80%;
            margin-top: 20px;
            margin-bottom: 30px;
        }
    }
  


    /* LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE  */
    /* LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE  */
    /* LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE  */
    @media (max-width: 1024px) {
        .navbar {
            justify-content: end;
        }

        .aboutme {
            width: 80%;
            margin-top: 50px;
        }


    }
</style>

<body>
    <!-- As a link -->
    <div class="container">
        <div class="navbar sticky-top" style="width: 100%;">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link navlinks" href="index.php">
                        <p style="margin: 0; font-size: 14px;" class="fw-light">WORKS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navlinks" href="">
                        <p style="margin: 0; color:#404040; font-size: 14px" class="fw-medium">ABOUT</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navlinks" href="resume.pdf" style="text-decoration: none" target="_blank">
                        <p style="margin: 0; font-size: 14px;" class="fw-light">RESUME</p>
                    </a>
                </li>
            </ul>
        </div>


        <div class="container">
                <div class="aboutme">
                    <p style="text-align:left; color: #404040; font-size: xx-large;" class="fw-bold">Welcome to my Portfolio, I'm Gio!</p>
                    <p style="text-align:left">I'm a self-taught UX designer based in Manila, Philippines. My goal is to turn great ideas into useful and enjoyable experiences for everyone.</p>
                    <p style="text-align:left">I was first exposed to UI/UX design during my time in college. While working on my thesis, I stumbled upon UI/UX design videos on YouTube, which I watched and immediately became interested in. My current goal is to secure a job in UI/UX design so that I can work on what I truly love doing.</p>
                    <p style="text-align:left">Although I've always loved design, I wasn't aware of the existence of UI/UX design. Pursuing a career in UI/UX design is perfect for me because I studied BS Information Technology in college due to my love for technology, and designing is my passion. During this time, I studied various design techniques and watched videos to improve my knowledge of UI/UX design.</p>
                    <p style="text-align:left">Now, I have learned how to identify various problems and approach them from a design perspective.</p>
                    <p style="text-align:left">Whether I'm designing digital products or creating mobile and web applications, I take pride in empathizing with people and making their lives easier.</p>
                </div>
        </div>


        

</body>

</html>