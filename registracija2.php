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
        <div class="forma">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-12">

                                <section role="main">
                                <form enctype="multipart/form-data" action="reg_skripta.php" method="POST">
                                <div class="form-item">
                                <span id="porukaIme" class="bojaPoruke"></span>
                                <label for="title">Ime: </label>
                                <div class="form-field">
                                <input type="text" name="ime" id="ime" class="form-field-textual">
                                </div>
                                </div>
                                <div class="form-item">
                                <span id="porukaPrezime" class="bojaPoruke"></span>
                                <label for="about">Prezime: </label>
                                <div class="form-field">
                                <input type="text" name="prezime" id="prezime" class="form-field-textual">
                                </div>
                                </div>
                                <div class="form-item">
                                <span id="porukaUsername" class="bojaPoruke"></span>
                                <label for="content">Korisničko ime:</label>
                                
                                <div class="form-field">
                                <input type="text" name="username" id="username" class="form-field-textual">
                                </div>
                                </div>
                                <div class="form-item">
                                <span id="porukaPass" class="bojaPoruke"></span>
                                <label for="pphoto">Lozinka: </label>
                                <div class="form-field">
                                <input type="password" name="pass" id="pass" class="form-field-textual">
                                 </div>
                                </div>
                                <div class="form-item">
                                <span id="porukaPassRep" class="bojaPoruke"></span>
                                <label for="pphoto">Ponovite lozinku: </label>
                                <div class="form-field">
                                <input type="password" name="passRep" id="passRep" class="form-field-textual">
                                </div>
                                </div>
                                <div class="form-item">
                                <button type="submit" value="Prijava" id="slanje" >Registracija</button>
                                </div>
                                </form>
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
                        <p>Ana Konjetić - akonjetic@tvz.hr - 2021.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript">

            document.getElementById("slanje").onclick = function(event) {
                var slanjeForme = true;

                // Ime korisnika mora biti uneseno
                var poljeIme = document.getElementById("ime");
                var ime = document.getElementById("ime").value;
                if (ime.length == 0) {
                    slanjeForme = false;
                    poljeIme.style.border = "1px dashed red";
                    document.getElementById("porukaIme").innerHTML = "<br>Unesite ime!<br>";

                } else {
                    poljeIme.style.border = "1px solid green";
                    document.getElementById("porukaIme").innerHTML = "";

                }
                // Prezime korisnika mora biti uneseno
                var poljePrezime = document.getElementById("prezime");
                var prezime = document.getElementById("prezime").value;
                if (prezime.length == 0) {
                    slanjeForme = false;

                    poljePrezime.style.border = "1px dashed red";

                    document.getElementById("porukaPrezime").innerHTML = "<br>Unesite Prezime!<br>";
                } else {
                    poljePrezime.style.border = "1px solid green";
                    document.getElementById("porukaPrezime").innerHTML = "";
                }

                // Korisničko ime mora biti uneseno
                var poljeUsername = document.getElementById("username");
                var username = document.getElementById("username").value;
                if (username.length == 0) {
                    slanjeForme = false;
                    poljeUsername.style.border = "1px dashed red";

                    document.getElementById("porukaUsername").innerHTML = "<br>Unesite korisničko ime!<br>";
                } else {
                    poljeUsername.style.border = "1px solid green";
                    document.getElementById("porukaUsername").innerHTML = "";
                }
                // Provjera podudaranja lozinki
                var poljePass = document.getElementById("pass");
                var pass = document.getElementById("pass").value;
                var poljePassRep = document.getElementById("passRep");
                var passRep = document.getElementById("passRep").value;
                if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
                    slanjeForme = false;
                    poljePass.style.border = "1px dashed red";
                    poljePassRep.style.border = "1px dashed red";
                    document.getElementById("porukaPass").innerHTML = "<br>Lozinke nisu iste!<br>";

                    document.getElementById("porukaPassRep").innerHTML = "<br>Lozinke nisu iste!<br>";
                } else {
                    poljePass.style.border = "1px solid green";
                    poljePassRep.style.border = "1px solid green";
                    document.getElementById("porukaPass").innerHTML = "";
                    document.getElementById("porukaPassRep").innerHTML = "";
                }

                if (slanjeForme != true) {
                    event.preventDefault();
                }
            }
        </script>
    </body>
</html>
