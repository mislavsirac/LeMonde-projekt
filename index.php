<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Le Monde</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel='icon' href='img/favicon.ico' type='image/x-icon'/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
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
        
        <?php include 'connect.php'; define('UPLPATH', 'img/'); ?>
        <div id="sredina">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <span class="kat"><a href="kategorija.php?id=politika"><p>Politika</p></a></span>
                        </div>
                    </div>
                    <div class="row">
                    <?php $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='politika' LIMIT 3"; 
                        $result = mysqli_query($dbc, $query); 
                        $i=0; 
                        while($row = mysqli_fetch_array($result)) { 
                            echo '<div class="col-lg-4 col-sm-12 col-md-4 col-12">';
                            echo '<article>';  
                            echo '<a href="clanak.php?id='.$row['id'].'">'; 
                            echo '<img src="' . UPLPATH . $row['slika'] . '"'; 
                            echo '<h4>';
                            echo $row['naslov']; 
                            echo '</h4></a>'; 
                            echo '</article>'; 
                            echo '</div>';}?>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                            <span class="kat"><a href="kategorija.php?id=sport"><p>Sport</p></a></span>
                        </div>
                    </div>
                    <div class="row">
                    <?php $query = "SELECT * FROM Vijesti WHERE arhiva=0 AND kategorija='sport' LIMIT 3"; 
                        $result = mysqli_query($dbc, $query); 
                        $i=0; 
                        while($row = mysqli_fetch_array($result)) { 
                            echo '<div class="col-lg-4 col-sm-12 col-md-4 col-12">';
                            echo '<article>'; 
                            echo '<a href="clanak.php?id='.$row['id'].'">'; 
                            echo '<img src="' . UPLPATH . $row['slika'] . '"'; 
                            echo '<h4>'; 
                            echo $row['naslov']; 
                            echo '</h4></a>'; 
                            echo '</article>'; 
                            echo '</div>';}?>
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