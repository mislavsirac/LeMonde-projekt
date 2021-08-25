<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Le Monde - članak</title>
        <link rel="stylesheet" type="text/css" href="style_skripta.css">
        <link rel='icon' href='img/favicon.ico' type='image/x-icon'/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    $idClanak = $_GET['id'];

    include 'connect.php';
    if ($dbc) 
    {
        $query = "SELECT * FROM vijesti WHERE id = $idClanak";
        $result = mysqli_query($dbc, $query) or die("Error");

        if ($result) 
        {
            while ($row = mysqli_fetch_array($result)) 
            {
                    $title = $row["naslov"];
                    $content= nl2br($row["tekst"]);
                    $image = $row["slika"];
                    $date = $row["datum"];
                    $category = $row["kategorija"];
                    $about = $row["sazetak"];
            }
        }
    } ?>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 col-md-12 col-12">
                        <input type="text" id="currentDate" >
                        <script>
                            var today = new Date();
                            var date = today.getDate()+'.'+(today.getMonth()+1)+'.'+today.getFullYear()+'.';
                            document.getElementById("currentDate").value = date;
                        </script>	 
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                        <h1>Le Monde</h1>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="kategorija.php?id=politika">Politika</a</li>
                                <li><a href="kategorija.php?id=sport">Sport</a></li>
                                <li><a href="unos.html">Unos</a></li>
                                <li><a href="prijava2.php#">Prijava</a></li>
                                <li><a href="registracija2.php">Registracija</a></li>
                                <li><a href="prijava2.php">Administracija</a></li>
                            </ul>            
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div id="forma">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <p class="category"><?php
                            echo $category;
                            ?></p>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <h1 class="title"><?php
                            echo $title;
                            ?></h1>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                            <p><span>OBJAVLJENO: <?php echo $date = date('Y-m-d');?> </span></p>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <section class="slika">
                            <?php
                            echo "<img  src='img/$image'";
                            ?>

                            </section>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                            <p class="category2"><?php echo $category; ?></p> 
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <section class="about">
                                <p>
                                <?php
                                echo $about;
                                ?>
                                </p>

                                </section>

                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <section class="sadrzaj">
                                <p>
                                <?php
                                echo $content;
                                ?>
                                </p>
                                </section>

                        </div>

                    </div>
                </div>
            </section>
                           
        </div>
    
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <p>Mislav Širac</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>