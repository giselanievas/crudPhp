<?php require_once'../includes/helpers.php';?>
<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>Registrate</h3>
        <form action="login.php" method="POST">
            <label for="nombre">Email</label>
            <input type="text" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <br><br>
            <input id="boton" type="submit" value="Entrar" />
        </form>
    </div>



    <div id="login" class="bloque">
        <?php if (isset($_SESSION['errores'])) : ?>
      

        <?php endif; ?>    
        <h3>Identificate</h3>
        <form action="registros.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ;?> 
            
            
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellidos" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ;?> 


            <label for="email">Email</label>
            <input type="text" name="email" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ;?> 

            <label for="password">Contraseña</label>
            <input type="password" name="password" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ;?> 

            <br><br>
            <input id="boton" name="submit"type="submit" value="Registrar" />
        </form>

    </div>

</aside>