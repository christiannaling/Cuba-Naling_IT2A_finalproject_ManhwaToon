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
                <a class="navbar-brand" href="index.php"> ManhwaToon </a>
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
                      <?php
                        echo "<h1 class=text-dark> Contents </h1>";
                        ?>
                    </div>
                </div>
            </div>
        </section>
<table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Chapter</th>
                    <th scope="col">Genre</th>
                </thead>
               
                <tbody>
                   <?php  
                    $file = simplexml_load_file("files/content.xml");

                    foreach($file->story as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->title; ?> </td>
                            <td> <?php echo $rows->author; ?> </td>
                            <td> <?php echo $rows->chapter; ?> </td>
                            <td> <?php echo $rows->genre; ?> </td>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Chapter</th>
                    <th scope="col">Genre</th>                     
                </tfoot>
            </table>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. add your fullname here</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>