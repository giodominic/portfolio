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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Home Page</title>
</head>


<style>
    #dp {
        width: 200px;
        height: 200px;
        margin-right: 15px;
        border-radius: 50%;
        object-fit: cover;
    }

    .separator {
        border-left: 3px solid #000000;
        height: 90px;
        margin-left: 10px;
    }

    .content {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-top: 50px;
    }

    .content-text {
        text-align: left;
        margin-left: 20px;
        width: 500px;
    }

    .navbar {
        justify-content: end;
        backdrop-filter: blur(5px);
        /* Apply a blur effect to the background */
        background-color: rgba(255, 255, 255, 0.5);
        /* Adjust the background color and opacity */
        width: 100%;
    }

    .navlinks {
        color: #686868;
    }

    .navlinks:hover {
        color: #404040;

    }

    #image1,
    #image2,
    #image3,
    #image4 {
        width: 500px;
        margin: 5px;
    }

    table {
        width: 100%;
        max-width: 1050px;
        margin: 0 auto;
        margin-top: 65px;
        /* Center the table horizontally */
    }

    .casestudy:hover {
        filter: brightness(90%);
    }



    /* SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL  */
    /* SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL  */
    /* SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL SMALL  */
    @media (max-width: 600px) {
        .navbar {
            justify-content: end;
        }

        #dp {
            width: 100px;
            height: 100px;
        }

        .separator {
            border-left: 3px solid #000000;
            height: 90px;
            margin-right: 10px;
        }

        .content {
          margin-top: 20px;
        }

        .content-text {
            width: 100%;
            margin-left: 0;
        }

        table {
            max-width: 100%;
            margin-top: 20px;
            display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Center the images horizontally */
        }

        #image1,
        #image2,
        #image3,
        #image4 {
            width: 100%;
            margin: 5px 0;
            display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Center the images horizontally */
        }

        table td {
            display: block;
            width: 100%;
            box-sizing: border-box;
            display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Center the images horizontally */
        }

        table img {
            width: 100%;
            margin-bottom: 5px;
            display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Center the images horizontally */
        }
    }


    /* LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE  */
    /* LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE  */
    /* LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE LARGE  */
    @media (max-width: 1024px)  {
        .navbar {
            justify-content: end;
        }

        #dp {
            width: 100px;
            height: 100px;
        }

        .separator {
            border-left: 3px solid #000000;
            height: 90px;
            margin-right: 10px;
        }

        .content {
          margin-top: 20px;
        }

        .content-text {
            width: 100%;
            margin-left: 0;
        }

        table {
            max-width: 100%;
            margin-top: 20px;
            margin-left: auto; /* Center the table horizontally */
            margin-right: auto; /* Center the table horizontally */
        }

        #image1,
        #image2,
        #image3,
        #image4 {
            width: 100%;
            margin: 5px 0;
        }

        table td {
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        table img {
            width: 100%;
            margin-bottom: 5px;
        }
    }
</style>


<body style="width: 100%">

<!-- As a link -->
<div class="container">
    <div class="navbar sticky-top">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link navlinks" href="index.php">
                    <p style="margin: 0; color: #404040; font-size: 14px" class="fw-medium">WORKS</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlinks" href="about.php">
                    <p style="margin: 0; font-size: 14px;" class="fw-light">ABOUT</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlinks" href="resume.pdf" style="text-decoration: none" target="_blank">
                    <p style="margin: 0; font-size: 14px;" class="fw-light">RESUME</p>
                </a>
            </li>
        </ul>
    </div>


    <div class="content">
        <img src="image/gio.png" id="dp" alt="">
        <div class="separator"></div>
        <div class="content-text">
            <h3 class="fw-bold fs-3" style="color: #404040;">Hi, I'm Gio!</h3>
            <p class="navlinkss" style="color: #686868">I’m a self-taught UI/UX Designer who brings inclusive, minimal
                &amp; future-oriented
                user experience to users in need.</p>
        </div>
    </div>




    <div class="" id="featured">
        <table>
            <tr>
                <td>
                    <a href="1.php" style="text-decoration: none;">
                        <img src="image/image1.png" class="casestudy" id="image1">
                        <p style="font-size: 14px; color: #686868;">&#9989 &nbsp; Productivity App</p>
                    </a>
                </td>
                <td>
                    <a href="2.php" style="text-decoration: none;">
                        <img src="image/image2.png" class="casestudy" id="image2">
                        <p style="font-size: 14px; color: #686868;">&#128172 &nbsp; Talk-talk Mobile App</p>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="" style="text-decoration: none;">
                        <img src="image/image3.png" class="casestudy" id="image3">
                        <p style="font-size: 14px; color: #686868;">&#x1f5e3 &nbsp; Talk-talk Web App</p>
                    </a>
                </td>
                <td>
                    <a href="" style="text-decoration: none;">
                        <img src="image/image4.png" class="casestudy" id="image4">
                        <p style="font-size: 14px; color: #686868;">&#x1f3e7 &nbsp; BDO App (Minimal Revision)</p>
                    </a>
                </td>
            </tr>
        </table>
    </div>


    <div class=""
        style="display: flex; align-items: center; justify-content: center; text-align: center; margin-top:10px;">
        <div class="row">
            <div class="col m-3">
                <a href="mailto:giodominicgarcia@gmail.com">
                    <i class="bi bi-envelope-at-fill"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#686868"
                        class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                        <path
                            d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                    </svg>
                </a>
            </div>


            <div class="col m-3">
                <a href="https://www.facebook.com/qiodominic/">
                    <i class="bi bi-facebook"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#686868" class="bi bi-facebook"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
            </div>

            <div class="col m-3">
                <i id="myIcon" class="bi bi-telephone-fill" data-bs-toggle="popover" data-bs-placement="right"
                    data-bs-content="09562756705">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#686868"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg></i>
            </div>
        </div>
    </div>
    <style>
        .container a:hover .bi,
        .container a:hover svg {
            fill: #404040;
            /* Change the fill color of the icons when hovering */
        }

        .container a:hover #myIcon {
            color: #404040;
            /* Change the color of the specific icon with ID "myIcon" when hovering */
        }

        .col:hover .bi-telephone-fill,
        .col:hover svg {
            fill: #404040;
            /* Change the fill color of the icon when hovering */
        }
    </style>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>


<!--@@@@@@@@@@-->

    <div class="" style="margin-top: 50px"></div>
</div>

<!-- SCROLL UP -->
<a href="#" id="scrollUpButton" class="hidden">
    <i class="fa-solid fa-circle-arrow-up" style="color: #686868"></i>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM385 231c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-71-71V376c0 13.3-10.7 24-24 24s-24-10.7-24-24V193.9l-71 71c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L239 119c9.4-9.4 24.6-9.4 33.9 0L385 231z"/></svg>
  </a>
  

<style>

#scrollUpButton {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
  width: 40px;
  height: 40px;
  line-height: 40px;
}

#scrollUpButton:hover svg path {
    fill: #404040;
  }

#scrollUpButton i {
  display: block;
}

#scrollUpButton.visible {
  display: block;
}

</style>

<script>
window.addEventListener('scroll', function() {
  var scrollButton = document.getElementById('scrollUpButton');
  if (window.scrollY > 300) {
    scrollButton.classList.add('visible');
  } else {
    scrollButton.classList.remove('visible');
  }
});

document.getElementById('scrollUpButton').addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});


</script>
<!-- SCROLL UP -->

</body>

</html>