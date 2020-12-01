<?php
include "configs/config.php";
include "configs/funciones.php";

    if(!isset($p)){
	    $p = "principal";
        }else{
	        $p = $p;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Oswald -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Estilo -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
    <title>Tienda Online</title>     
</head>
<body>
    <div class="header">
    Tienda Online
    </div>
    
    <div class="nav-main">
        <a href="?p=principal">Principal</a>
        <a href="?p=productos">Productos</a>
        <a href="?p=carrito">Carrito</a>
        <a href="?p=admin">Administrador</a>

        <?php
            if (isset($_SESSION['id_cliente'])) {          
        ?>
        <a class="pull-right der" href="?p=salir">Salir</a>
        <a class="pull-right der" href="#"><?=nombre_cliente($_SESSION['id_cliente'])?></a>       
        <?php
            }
        ?> 

    <?php
            if (isset($_SESSION['id'])) {          
        ?>
        <a class="pull-right der" href="?p=salir">Salir</a>     
        <?php
            }
    ?> 
        
    </div>

    <div class="cuerpo">
		<?php
			if(file_exists("modulos/".$p.".php")){
				include "modulos/".$p.".php";
			}else{
				echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
			}
		?>
	</div>


        <!--Pie de Pagina-->
        <footer class="footer">
        <div class="footer-links">
            <div class="footer-container">
                <ul>
                    <li>                       
                        <h3>Direccion</h3>                       
                    </li>
                    <li>
                        <p>Calle Juanito Av. Sutanito Col.Menganito #919 CP.3399</p>
                    </li>                    
                </ul>
                <ul>
                    <li>
                        <h3>Telefono</h3>                       
                    </li>
                    <li>
                        <p>+52 8791456712</p>
                    </li>                    
                </ul>
                <ul>
                    <li>                       
                        <h3>Correo</h3>                    
                    </li>
                    <li>
                        <p>VendCell@VissCell.com</p>
                    </li>                    
                </ul>
                
            </div>

            <h3>&copy;2020 VENDCELL ALL RIGHTS RESERVED</h3>
        </div>    
    </footer>


</body>
</html>
