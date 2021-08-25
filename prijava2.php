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
                    <!-- Forma za prijavu -->
                    <section role="main">
                        <form enctype="multipart/form-data" action="prijava_skripta.php" method="POST">

                        <div class="form-item">
                        <label for="content">Korisničko ime:</label>
                        <div class="form-field">
                        <input type="text" name="username" id="username" class="formfield-textual">
                        </div>
                        </div>
                        <div class="form-item">
                        <span id="porukaPass" class="bojaPoruke"></span>
                        <label for="pphoto">Lozinka: </label>
                        <div class="form-field">
                        <input type="password" name="pass" id="pass" class="formfield-textual">
                        </div>
                        </div>
                        <br/>
                        <div class="form-item">
                        <button type="submit" name="submit" value="Prijava" id="slanje">Prijava</button>
                </div>  
        </div>        
        <script type="text/javascript">

            //javascript validacija forme

            document.getElementById("slanje").onclick = function(event) {
                var poljeUsername = document.getElementById("username");
                var username = document.getElementById("username").value;
                if (username.length == 0) {
                slanjeForme = false;
                poljeUsername.style.border="1px dashed red";

                document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
                } else {
                poljeUsername.style.border="1px solid green";
                document.getElementById("porukaUsername").innerHTML="";
                }
            }

            </script>
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