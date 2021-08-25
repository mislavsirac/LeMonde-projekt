<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Le Monde</title>
        <link rel="stylesheet" type="text/css" href="style_skripta.css">
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

include 'connect.php'; 
    if (isset($_POST['Prihvati'])){
  if(isset($_POST['title']) && isset($_POST['about']) && isset($_POST['content']) && isset($_POST['category'])){

       $picture = $_FILES['pphoto']['name'];
                    $target_dir = 'uploads/'.$picture;
                    
					
					//echo $picture;

    $title=$_POST['title'];

    $about=$_POST['about'];

    $content=$_POST['content'];

    $category=$_POST['category'];

    $date=date('d.m.Y.');

    if(isset($_POST['archive']))

    { $archive=1; }

    else{ $archive=0; }

   

    $query = "INSERT INTO vijesti (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$date', '$title', '$about', '$content', '$picture', '$category', '$archive')";

move_uploaded_file($_FILES['pphoto']['tmp_name'], $target_dir);
     if (mysqli_query($dbc, $query)) {
                        echo "<div class='objava'>";
                        echo "<br/>Novi članak je spremljen";
                        echo "</div>";                        
                      } else {
                        echo "<br/>Error: " . mysqli_error($dbc);
                      }
    }
}
if(isset($_POST['delete'])){ 
    $id=$_POST['id']; 
    $query = "DELETE FROM vijesti WHERE id=$id "; 
    $result = mysqli_query($dbc, $query);
    echo "<div class='objava'>";     
    echo "<br/>Članak je obrisan!";
    echo "</div>";
 }
 if(isset($_POST['update'])){ 
     $picture = $_FILES['pphoto']['name']; 
     $title=$_POST['title']; 
     $about=$_POST['about']; 
     $content=$_POST['content']; 
     $category=$_POST['category']; 
     if(isset($_POST['archive'])){ 
         $archive=1; }
         else{ 
             $archive=0;  
             $target_dir = 'img/'.$picture; 
             move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir); 
             $id=$_POST['id']; 
             $query = "UPDATE vijesti SET naslov='$title', sazetak='$about', tekst='$content', slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id "; 
             $result = mysqli_query($dbc, $query);
             echo "<div class='objava'>";
             echo "<br/>Novi članak je izmijenjen!";
             echo "</div>";
            }
        }

?>
    
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