<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Administracija</title>
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
               
<?php
                    session_start();
                    include 'connect.php';
                    // Putanja do direktorija sa slikama
                    define('UPLPATH', 'img/');
                        $query = "SELECT * FROM vijesti";
                        $result = mysqli_query($dbc, $query);
                        while($row = mysqli_fetch_array($result)) {
                            echo '<section class="forma">
                            <form enctype="multipart/form-data" action="skripta.php" method="POST">
                            <div class="form-item">
                            <label for="title">Naslov vijesti:</label>
                            <div class="form-field">
                            <input type="text" name="title" class="form-field-textual" value="'.$row['naslov'].'">
                            </div>
                            </div>
                            <div class="form-item">
                            <label for="about">Kratki sadržaj vijesti (do 100
                            znakova):</label>
                            <div class="form-field">
                            <textarea name="about" id="" cols="30" rows="10" class="form- field-textual">'.$row['sazetak'].'</textarea>
                            </div>
                            </div>
                            <div class="form-item">
                            <label for="content">Sadržaj vijesti:</label>
                            <div class="form-field">
                            <textarea name="content" id="" cols="30" rows="10" class="form- field-textual">'.$row['tekst'].'</textarea>
                            </div>
                            </div>
                            <div class="form-item">
                            <label for="pphoto">Slika:</label>
                            <div class="form-field">
                            
                            <input type="file" class="input-text" id="pphoto" value="'.$row['slika'].'" name="pphoto"/> <br><img src="' . UPLPATH .
                            $row['slika'] . '" width=100px>

                            </div>
                            </div>
                            <div class="form-item">
                            <label for="category">Kategorija vijesti:</label>
                            <div class="form-field">
                            <select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'">
                            <option value="politika">Politika</option>
                            <option value="sport">Sport</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-item">
                            <label>Spremiti u arhivu:
                            <div class="form-field">'; 
                            if($row['arhiva'] == 0) {
                            echo '<input type="checkbox" name="archive" id="archive"/>
                            
                            Arhiviraj?';
                            } else {
                            echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
                            }
                            echo '</div>
                            </label>
                            </div>
                            </div>
                            <div class="form-item">
                            <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
                            <button type="reset" value="Poništi">Poništi</button>
                            <button type="submit" name="update" value="Prihvati">Izmijeni</button>
                            <button type="submit" name="delete" value="Izbriši">Izbriši</button>
                            </div>
                            </form>
                            </section>';

}?>

            
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