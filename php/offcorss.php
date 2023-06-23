<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Off Corss'</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/offcorss.css">
</head>

<body>

    <header class="row" style=background:black;>
        <div class="navbar col-md justify-content-center">
            <img src="../img/logoOffcorssIts.png" height="32.5" class="d-inline-block align-top" alt="" style="align-items:center;">
        </div>
    </header>
    <nav class="row">
        <div class="col-2">

            <img class="fa" src="../img/logoOffcorssIts.png" height="32.5" class="d-inline-block align-top" alt="" style="align-items:center;">

        </div>
        <div class="col-7">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <i class="fa fa-commenting"></i>
                            <li class="nav-item">
                            </li>
                            <a class="nav-link active" aria-current="page" href="#">OC BLOG</a>
                            </li>
                            <li class="nav-item">
                                <i class="fa fa-book"></i>
                            <li class="nav-item"></li>
                            <a class="nav-link" href="#">VENDE INTERNACIONAL</a>
                            </li>
                            <li class="nav-item">
                                <i class="fa fa-map-marker"></i>
                            <li class="nav-item"></li>
                            <a class="nav-link" href="#">ENCUENTRANOS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


        </div>
        <div class="col-3">
            <i class="fa fa-user"></i>
            <button class="sign-in">Sign In</button>
            <button class="sign-out">Sign Out</button>

        </div>

    </nav>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/banner-principal-basicos-offcorss-23.webp" class="d-block w-100" alt="...">
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <center>
                    <h2>Popular Destination</h2>
                </center>
            </div>
        </div>

        <div class="row">
           <?php include '../bd/php/get.php' ?>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <center>
                    <h2>upcoming trips for you</h2>
                    </center>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <?php include '../bd/php/get.php' ?>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">


            <div class="row">
                <div class="col-md">
                    <center>
                        <h2>your work</h2>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <i class="fa-solid fa-location-dot"></i>
                    <h4>Select location</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis non sem elementum tempor in at urna. Suspendisse auctor libero ut nibh consequat sed sagittis dolor iaculis. Donec condimentum mauris nec eros auctor sed vestibulum tellus consequat. Pellentesque tincidunt hendrerit neque, tincidunt tempus mauris consequat non.</p>
                </div>
                <div class="col-md-6">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <h4>Preparation</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis non sem elementum tempor in at urna. Suspendisse auctor libero ut nibh consequat sed sagittis dolor iaculis. Donec condimentum mauris nec eros auctor sed vestibulum tellus consequat. Pellentesque tincidunt hendrerit neque, tincidunt tempus mauris consequat non.</p>
                </div>
                <div class="col-md-6">
                    <i class="fa-solid fa-plane fa-rotate-270"></i>
                    <h4>Travel</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis non sem elementum tempor in at urna. Suspendisse auctor libero ut nibh consequat sed sagittis dolor iaculis. Donec condimentum mauris nec eros auctor sed vestibulum tellus consequat. Pellentesque tincidunt hendrerit neque, tincidunt tempus mauris consequat non.</p>
                </div>
                <div class="col-md-6">
                    <i class="fa-regular fa-face-smile"></i>
                    <h4>Enjoy your Trip</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis non sem elementum tempor in at urna. Suspendisse auctor libero ut nibh consequat sed sagittis dolor iaculis. Donec condimentum mauris nec eros auctor sed vestibulum tellus consequat. Pellentesque tincidunt hendrerit neque, tincidunt tempus mauris consequat non.</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <center>
                        <h2>Adventure</h2>
                    </center>
                </div>
            </div>

            <div class="row">
                <div class="row">
                    <?php include '../bd/php/get.php' ?>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">


            <div class="row">
                <div class="col-md">
                    <center>
                        <h2>About us</h2>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <img src="" alt="">
                </div>
                <div class="col-6">
                    <p>
                        <img src="" align="left">Texto tan extenso como queramos que cubrirá la parte izquierda de la imagen. Sigo poniendo texto para que se vea el efecto, Bla bla bla bla bla bla bla...
                    </p>
                    <p>
                        <img src="" align="left">Texto tan extenso como queramos que cubrirá la parte izquierda de la imagen. Sigo poniendo texto para que se vea el efecto, Bla bla bla bla bla bla bla...
                    </p>
                    <p>
                        <img src="" align="left">Texto tan extenso como queramos que cubrirá la parte izquierda de la imagen. Sigo poniendo texto para que se vea el efecto, Bla bla bla bla bla bla bla...
                    </p>
                    <p>
                        <img src="" align="left">Texto tan extenso como queramos que cubrirá la parte izquierda de la imagen. Sigo poniendo texto para que se vea el efecto, Bla bla bla bla bla bla bla...
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-md">
                    <center>
                        <h2>clint feedback</h2>
                    </center>
                </div>

            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p>Our Founder Andres Bonilla had a vision for a dog park that was warm, welcoming, and like no
                            other.
                            He turned that vision into a reality, and it’s the space we know and love today.</p>
                    </div>
                    <div class="col-md-3">
                        <h2>Our Services</h2>
                        <ul>
                            <li><a href="">Boarding</a></li>
                            <li><a href="">Daycare</a></li>
                            <li><a href="">Grooming</a></li>
                            <li><a href="">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><strong>Phone:</strong><br>
                                <a href="">(786) 401-7748</a>
                            </li>
                            <li><strong>Email:</strong><br>
                                <a href="">info@barksquare.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>Visit Us</h2>
                        <ul>
                            <li><strong>Address:</strong><br>
                                8600 NW 56th St, Bay 7<br>
                                Doral, FL 33166</li>
                            <li><strong>Hours:</strong><br>
                                Open 7 days a week<br>
                                Mon-Sat: 8 AM a 6:00 PM<br>
                                Sun: 10 AM a 4 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        <script src="../js/offcorss.js"></script>
</body>

</html>