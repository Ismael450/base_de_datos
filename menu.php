<?php

?>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" alt="" width="35" class="d-inline-block align-text-top"> CLINICA
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                </li>
                <?php if(isset($_SESSION['nombre_y_apellido'])){ ?>
                <li class="nav-item" hidden>
                    <a class="nav-link"  href="listado-user.php">LISTADO  DE USUARIOS</a>
                </li><?php } else{?>
                    <li class="nav-item"    >
                    <a class="nav-link"  href="#">ESPECIALIDADES</a>
                </li> <?php } ?>
                 
                <?php if(isset($_SESSION['nombre_y_apellido'])){ ?>
                    <li class="nav-item" hidden>
                        <a class="nav-link"  href="listado-user.php">LISTADO  DE USUARIOS</a>
                    </li><?php } else{?>
                        <li class="nav-item"   >
                        <a class="nav-link"  href=" #">PLANES</a>
                    </li> <?php } ?>
                         
                <?php if(isset($_SESSION['nombre_y_apellido'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" id= "ocultar" href="asociarme.php"> </a>
                </li><?php } else{?>
                    <li class="nav-item" hidden >
                    <a class="nav-link" href="asociarme.php">ASOCIARME</a>
                </li> <?php } ?>
                <?php if(isset($_SESSION['nombre_y_apellido'])){ ?>
                <li class="nav-item">
                    <a class="nav-link"  href="listado-turnos.php">LISTADO  DE TURNOS</a>
                </li><?php } else{?>
                    <li class="nav-item"   >
                    <a class="nav-link"  href="asociarme.php">ASOCIARME</a>
                </li> <?php } ?>
                <?php if(isset($_SESSION['nombre_y_apellido'])){ ?>
                <li class="nav-item">
                    <a class="nav-link"  href="listado-user.php">LISTADO  DE USUARIOS</a>
                </li><?php } else{?>
                    <li class="nav-item" hidden  >
                    <a class="nav-link"  href="asociarme.php">ASOCIARME</a>
                </li> <?php } ?>
                    <?php
                    if(isset($_SESSION['nombre_y_apellido'])){ ?>

                    <li class="nav-item">
                     <a class="nav-link" href="cpanel.php">CPANEL </a>
                    </li>
                     <li class="nav-item">
                     <a class="nav-link" href="salir.php">CERRAR SESION </a>
                    </li> <?php } else{?>
                    <li class="nav-item">
                     <a class="nav-link" href="login.php">INICIAR SESION</a>
                    </li>
                <?php }?>
                
            </ul>
        </div>
    </div>
</nav>