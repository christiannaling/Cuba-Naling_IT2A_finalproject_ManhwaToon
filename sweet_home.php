 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Project</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="sweet_home.php">Sweet Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="content.php">Content</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="aboutus.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Read on ManhwaToon</h1>
                <p class="lead"> Enjoy reading your favourite Manhwa online.</p>
            </div>
        </header>
        <!-- About section-->
        <section id="Manhwa">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                            <img src="images/sweet_home/sweet_home_cover.jpg" alt="" class="img-fluid rounded shadow-sm">
                            <?php
                                echo "<br/>";
                                echo "<p><h4> Now a major adaptation on streaming. After an unexpected family tragedy, a reclusive</h4></p>";
                                echo "<p><h4> high school student is forced to leave his home, only to face something much scarier:</h4></p>";
                                echo "<p><h4> a reality where monsters are trying to wipe out humanity. Now he must fight </h4></p>";
                                echo "<p><h4>  alongside a handful of reluctant heroes to try and save the world before it’s too late.</h4></p>";
                                echo "<br/>";
                            ?> 
                            <ul type="none">
                            <li ><h5><a class="text-dark" href="sweethomeprologue.php">Prologue</a></h5></li>
                            <br/>
                            <li ><h5><a class="text-dark" href="sweethomechapter1.php">Chapter 1</a></h5></li>
                            <br/>
                            <li ><h5><a class="text-dark" href="sweethomechapter2.php">Chapter 2</a></h5></li>
                            <br/>
                            <li ><h5><a class="text-dark" href="sweethomechapter3.php">Chapter 3</a></h5></li>
                            <br/>
                            <li ><h5><a class="text-dark" href="sweethomechapter4.php">Chapter 4</a></h5></li>
                            <br/>
                            </ul>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. ManhwaToon</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
