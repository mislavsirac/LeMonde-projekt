<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Registracija</title>
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
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">
                     <?php
                            include 'connect.php';
                            define('UPLPATH', 'img/');

                            $ime = $_POST['ime'];
                            $prezime = $_POST['prezime'];
                            $username = $_POST['username'];
                            $lozinka = $_POST['pass'];
                            $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
                            $razina = 0;
                            $registriranKorisnik = '';


                            //Provjera postoji li u bazi već korisnik s tim korisničkim imenom
                            $sql = "SELECT korisnicko_ime FROM korisnici WHERE korisnicko_ime = ?";
                            $stmt = mysqli_stmt_init($dbc);
                            if (mysqli_stmt_prepare($stmt, $sql)) { 
                                mysqli_stmt_bind_param($stmt, 's', $username); 
                                mysqli_stmt_execute($stmt); 
                                mysqli_stmt_store_result($stmt);
                            }
                            if(mysqli_stmt_num_rows($stmt) > 0){
                            echo 'Korisničko ime već postoji!';
                            echo '<br/>';
                            echo '<a href="registracija2.php">Povratak na registraciju.</a>';
                            }else{

                            // Ako ne postoji korisnik s tim korisničkim imenom - Registracija korisnika u bazi pazeći na SQL injection
                            $sql = "INSERT INTO korisnici (ime, prezime,korisnicko_ime, lozinka, razina)VALUES (?, ?, ?, ?, ?)";
                            $stmt = mysqli_stmt_init($dbc);
                            if (mysqli_stmt_prepare($stmt, $sql))  { mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username,
                            $hashed_password, $razina); mysqli_stmt_execute($stmt);
                            $registriranKorisnik = true;
                            }



                            }

                            //Registracija je prošla uspješno
                            if($registriranKorisnik == true) {
                                echo '<p>Korisnik je uspješno registriran!</p>';
                                echo '<a href="index.php"> Povratak na naslovnicu. </a>';
                                } else {
                                    echo '<p>Neuspjela registracija!</p>';
                                }
                            mysqli_close($dbc); ?>
                        </div>
                    </div>
                </div>
            </section>
    
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
