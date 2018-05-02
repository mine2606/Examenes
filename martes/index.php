<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
        <img src="mercadona_logo.jpg" alt="Mercadona">
        <button type="button" class="btn btn-danger float-right"><i class="fas fa-shopping-cart"></i> Compra online</button>
        <p>hola</p>
    </header>
    
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Conócenos <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Supermercados</a>
                <a class="nav-item nav-link" href="#">Servicios</a>
                <a class="nav-item nav-link" href="#">Consejos</a>
                <a class="nav-item nav-link" href="#">Actualidad</a>
                <a class="nav-item nav-link" href="#">Atención al cliente</a>
            
            </div>
        </div>
    </nav>

    <div>
        <img src="tienda.jpg" alt="Tienda Mercadona" witdh="100%">
    </div>
    <div class="titulo">
        <h1>Actualidad Mercadona</h1>
    </div>
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="imagen1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mercadona compra 290.000 kilos de patata de Álava, un 23% más que la campaña anterior</h5>
                <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>
                <button type="button" class="btn btn-sm">Responsabilidad social</button>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="imagen2.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Mercadona compra 1 millón de kilos de alcachofa en Tudela </h5>
            <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>
            <button type="button" class="btn btn-sm">Productos de proximidad</button>
            
        </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="imagen3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Vacantes de empleo Logística y Mantenimiento en Mercadona</h5>
                <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>
                <button type="button" class="btn btn-sm">Productos de proximidad</button>    
            </div>
        </div>
    </div>
    <div id="formulario">
        <p class="text-center"><a href="">Ver todos</a></p>
        <h5>Mercadona cuenta con 1.626 supermercados. <br/>Encuentra tu Mercadona más cercano y su horario</h5>
        <div class="row justify-content-center">
            <div class="col-4 input-group mb-3">
                <input type="text" class="form-control" placeholder="Ciudad, código postal o dirección" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i> Buscar</button>
                </div>
            </div>
        </div>
        <p class="text-center"><button type="button" class="btn btn-link"><i class="fas fa-location-arrow"></i> Usar mi localización actual</button></p>
    </div>

    <div class="row" id="anuncios">
        <div class="col">
            <h1><i class="fas fa-bullhorn"></i></h1>
            <h1>Atención al cliente</h1>
            <p>Puedes realizar cualquier comentario o 
                consulta llamándonos a nuestro 
                <strong>teléfono gratuito de Atención al Cliente</strong>, 
                enviando un <strong>Correo Electrónico</strong>
                o si lo prefieres contacta con 
                nosotros a través de nuestras <strong>
                Redes Sociales</strong>.</p>
        </div>
        <div class="col">
            <div>
            <h1><i class="fas fa-clipboard-list"></i></h1>
            <h1>Sala de prensa</h1>
            <p>Notas de prensa, estudios, informes, 
                memorias anuales y otro material corporativo.</p>
        </div></div>
    </div>

    <div id="ofertas-empleo" class="text-center">
        <h1>Ofertas de empleo</h1>
        <p>Mercadona dispone de un Modelo de Recursos Humanos 
            reconocido por ofrecer puestos de trabajo estables y de calidad.
        </p>
        <button type="button" class="btn btn-md">Ofertas de empleo</button>
    </div>

    <div id="logo-footer" class="text-center">
        <img src="mercadona_logo_footer.jpg" alt="Mercadona" width="560px">
    </div>

    <footer>
        <div class="row">
            <div class="col">
                <p><strong>Lo más buscado </strong></p>
                <ul>
                    <li>Localizar supermercados</li>
                    <li>Trabaja con nosotros</li>
                    <li>Sala de prensa</li>
                    <li>Conoce Mercadona</li>
                    <li>Consejos</li>
                </ul>
            </div>
            <div class="col">
                <p><strong>Enlaces de interés </strong></p>
                <ul>
                    <li>Compra online</li>
                    <li>Tarjeta Mercadona</li>
                    <li>Factura clientes</li>
                    <li>Portal trabajador</li>
                    <li>E-factura proveedores</li>
                    <li>Portal Trinidad</li>
                </ul>
            </div>
            <div class="col">
                <p><strong>Consejos </strong></p>
                <ul>
                    <li>Consejos de alimentación</li>
                    <li>Consejos de perfumería</li>
                    <li>Consejos de hogar</li>
                    <li>Consejos de mascotas</li>
                </ul>
            </div>
            <div class="col">
                <p><strong>Atención al cliente </strong></p>
                <ul>
                    <li><a href=""><i class="fas fa-envelope"></i> Contacto</a></li>
                    <li><i class="fas fa-phone"></i> 900 500 103</li>
                </ul>
                <p><strong>Redes sociales</strong></p>
                <p>
                    <i class="fab fa-facebook"></i> 
                    <i class="fab fa-twitter"></i> 
                    <i class="fab fa-youtube"></i> 
                    <i class="fab fa-instagram"></i>
                </p>
                
            </div>
            <div class="col">
                <img src="corredor_med.jpg" alt="Corredor Mediterráneo">
            </div>
        
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>© Mercadona S.A. A46103834. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-8">
                <ul>
                    <li>Accesibilidad</li>
                    <li>Condiciones Wifi</li>
                    <li>Política de privacidad</li>
                    <li>Política de cookies</li>
                    <li>Términos y condiciones</li>
                    <li>Requisitos técnicos</li>
                </ul>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>