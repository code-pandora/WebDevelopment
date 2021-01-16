<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- A viewport meta tag should make the web site work on all devices and screen resolutions -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3 Refernce -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!-- CSS -->
<link rel="stylesheet" href="index.css">
<!-- <link rel="stylesheet" href="nav.css"> -->
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- javascripy -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- javascript -->


<body style="font-family: 'Noto Sans JP', sans-serif;">
    <title>Seri's Choice</title>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(194, 79, 102);">
        <a class="navbar-brand" href="#" style="font-family:cursive;"><i class="fa fa-female" aria-hidden="true"> </i> <b><u>Seri's Choice</u></b></a>
        <button class="navbar-toggler"   data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:black;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:black">About</a>
                    
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                        <a class="dropdown-item" href="lip.php">Lips</a>
                        <a class="dropdown-item" href="#">Eyes</a>
                        <a class="dropdown-item" href="#">Lips</a>
                        <a class="dropdown-item" href="#">Body</a>
                        <a class="dropdown-item" href="#">Hair</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"style="color:black">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- corousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="border: 5px solid rgb(14, 13, 13);">
            <div class="carousel-item active">
                <img class="d-block w-100 " src="head1.jpg" alt="First slide">
            </div>

            <div class="carousel-item">
                <img class="d-block " src="head3.jpg" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block " src="head2.jpg" alt="Third slide">
            </div>

            <div class="carousel-item">
                <img class="d-block " src="head4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color:black;" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:black;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- horizontal line after the coroseul -->
    <div class="vl"></div>



    <!-- cards -->

    <div class="card1 row">
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="a1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> Kay Beauty</h5>
                <p class="card-text">Upto 20% off + Free Lip Crayon</p>
                <p class="card-text">Worth Rs 799 on orders of Rs.1200</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="a2.gif" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">M.A.C</h5>
                <p class="card-text">Buy 3 Get 3 Free</p>
                <p class="card-text">Pick 3 free gifts on purchse of 3 products</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="a3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Maybelline</h5>
                <p class="card-text">Get upto 50% off</p>
                <p class="card-text">"Up your glam quotient!"</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
    </div>

    <!-- card 2 -->
    <div class="card1 row" style="background-color:rgb(194, 79, 102);">
        <div class="card col-sm" id="card" style="background-color:darkgrey;border: 1px solid black;">
            <img class="card-img-top" src="a1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> Kay Beauty</h5>
                <p class="card-text">Upto 20% off + Free Lip Crayon</p>
                <p class="card-text">Worth Rs 799 on orders of Rs.1200</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card" style="background-color:darkgrey;border: 1px solid black;">
            <img class="card-img-top" src="a2.gif" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">M.A.C</h5>
                <p class="card-text">Buy 3 Get 3 Free</p>
                <p class="card-text">Pick 3 free gifts on purchse of 3 products</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card" style="background-color:darkgrey;border: 1px solid black;">
            <img class="card-img-top" src="a3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Maybelline</h5>
                <p class="card-text">Get upto 50% off</p>
                <p class="card-text">"Up your glam quotient!"</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
    </div>

    <!-- card 3 -->
    <div class="card1 row">
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="a1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> Kay Beauty</h5>
                <p class="card-text">Upto 20% off + Free Lip Crayon</p>
                <p class="card-text">Worth Rs 799 on orders of Rs.1200</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="a2.gif" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">M.A.C</h5>
                <p class="card-text">Buy 3 Get 3 Free</p>
                <p class="card-text">Pick 3 free gifts on purchse of 3 products</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card">
            <img class="card-img-top" src="a3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Maybelline</h5>
                <p class="card-text">Get upto 50% off</p>
                <p class="card-text">"Up your glam quotient!"</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
    </div>
    <!-- card 4 -->
    <div class="card1 row" style="background-color:rgb(194, 79, 102);">
        <div class="card col-sm" id="card" style="background-color:darkgrey;border: 1px solid black;">
            <img class="card-img-top" src="a1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> Kay Beauty</h5>
                <p class="card-text">Upto 20% off + Free Lip Crayon</p>
                <p class="card-text">Worth Rs 799 on orders of Rs.1200</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card" style="background-color:darkgrey;border: 1px solid black;">
            <img class="card-img-top" src="a2.gif" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">M.A.C</h5>
                <p class="card-text">Buy 3 Get 3 Free</p>
                <p class="card-text">Pick 3 free gifts on purchse of 3 products</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
        <div class="card col-sm" id="card" style="background-color:darkgrey;border: 1px solid black;">
            <img class="card-img-top" src="a3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Maybelline</h5>
                <p class="card-text">Get upto 50% off</p>
                <p class="card-text">"Up your glam quotient!"</p>
                <a href="#" class="btn btn-primary"> Know More</a>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
        <a href="#"><i class="fa fa-facebook-official"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/sangeetha-panicker-339827140"><i class="fa fa-linkedin"></i></a>
        <p>Contact</p>
        <p class="w3-medium">
            Copyright ©. Made by SANGEETHA PANICKER<br>
            As a part of <br>The LeanIn Web Dev Team
        </p>
    </footer>

    <script>
        $('img').on('dragstart', function(event) {
            event.preventDefault();
        });
    </script>
</body>

</html>