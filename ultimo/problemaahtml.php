<?php



require_once ("cliente.php");



$vector = array ();

$vector[] = new Cliente ("Claudio", 36);

$vector[] = new Cliente ("Soledad", 35);

$vector[] = new Cliente ("Vanesa", 25);

//una manera de hacerlo
$vector[0]->altaPedido( new Pedido("2018-04-12", 158,70 ) );
$vector[0]->altaPedido( new Pedido("2018-04-10", 25,75) );


$vector[1]->altaPedido( new Pedido("2018-04-12", 158,70 ) );
$vector[1]->altaPedido( new Pedido("2018-04-10", 25,75) );

$vector[2]->altaPedido( new Pedido("2018-03-12", 80) );
$vector[2]->altaPedido( new Pedido("2018-04-10", 36,75) );






?>



<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



    

  </head>

  <body>

        <header>
            <img src="imagen/logo.jpg" alt="logo" height="120">
        </header>

       

            <div id="uno">     
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p>LISTA DE CLIENTES</p>
                                <ol>
                                    <?php for ($i=0; $i < count($vector); $i++) { 
                                    echo "<li>";
                                    echo $vector[$i]->getNombre()." - ";

                                    echo $vector[$i]->getEdad();
                                    echo ($vector[$i]->getEdad() == 1) ? " año " : " años ";                                    
                                    echo " - ";

                                    echo $vector[$i]->getImporteTotal()." € ";
                                    echo "</li>";
                                    }
                                    ?>                     
                                </ol>
                        </div



                        <div class="col-md-3">
                            <form action="formulario.php" target="_blank">
                                <center>
                                    <button type="submit" class="btn btn-warning" >Rellenar Formulario</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            



        <footer>          

        </footer>



    

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>