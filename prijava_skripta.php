<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Prijava</title>
        <link rel="stylesheet" type="text/css" href="style_unos.css">
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
        <div class="forma">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                        <?php
                    session_start();
                    include 'connect.php';
                    // Putanja do direktorija sa slikama
                    define('UPLPATH', 'img/');
                    // Provjera da li je korisnik došao s login forme
                    if (isset($_POST['submit'])) {
                        // Provjera da li korisnik postoji u bazi uz zaštitu od SQL injectiona
                        $prijavaImeKorisnika = $_POST['username'];
                        $prijavaLozinkaKorisnika = $_POST['pass'];
                        $sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnici
                        WHERE korisnicko_ime = ?";
                        $stmt = mysqli_stmt_init($dbc);
                        if (mysqli_stmt_prepare($stmt, $sql)) {
                            mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                        }
                        mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, $levelKorisnika);
                        mysqli_stmt_fetch($stmt);
                        //Provjera lozinke
                        if (password_verify($_POST['pass'], $lozinkaKorisnika) &&
                            mysqli_stmt_num_rows($stmt) > 0) {
                        $uspjesnaPrijava = true;
                        // Provjera da li je admin
                        if($levelKorisnika == 1) {
                        $admin = true;
                        }
                        else {
                        $admin = false;
                        }
                        //postavljanje session varijabli
                        $_SESSION['$username'] = $imeKorisnika;
                        $_SESSION['$level'] = $levelKorisnika;
                        } else {
                        $uspjesnaPrijava = false;
                        }

                    }
                    // Brisanje i promijena arhiviranosti

                    if (($uspjesnaPrijava == true && $admin == true) ||
                        (isset($_SESSION['$username'])) && $_SESSION['$level'] == 1) {
                            //username: admin, pass:admin
                            echo '<p>Bok ' . $imeKorisnika . '! Uspješno ste prijavljeni, administrator ste.</p>';
                            echo '<div class="container">
                                    <div class="row justify-content-center">
                                        <form enctype="multipart/form-data" action="administracija.php" method="POST">
                                        <div class="form-item">
                                        <button type="submit" name="submit" value="Prijava"
                                        id="slanje">ADMINISTRACIJA</button>
                                            </div></form>
                                    </div>    
                                </div>';

                    } else if ($uspjesnaPrijava == true && $admin == false) {

                        echo '<p>Bok ' . $imeKorisnika . '! Uspješno ste prijavljeni, ali
                        niste administrator.</p>';
                    } else if (isset($_SESSION['$username']) && $_SESSION['$level'] == 0) {
                        
                        
                        echo '<p>Bok ' . $_SESSION['$username'] . '! Uspješno ste
                        prijavljeni, ali niste administrator.</p>';
                    }
                    
                    ?>
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