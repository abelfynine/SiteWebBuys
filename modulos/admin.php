<?php
if (isset($enviar)) {
    $username = clear($username);
    $password = clear($password);

    $q = $mysqli->query("SELECT * FROM admins WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($q)>0) {
        $r = mysqli_fetch_array($q);
        $_SESSION['id'] = $r['id'];
        redir("?p=admin");
    }else{
        alert("Los Datos No Son Validos");
        redir("?p=admin");
    }
}

/*Si Hay una session iniciada */
if (isset($_SESSION['id'])) {
    ?>
    <a href="?p=agregar_producto">
    <button class="btn btn-primary"><i class=" fa fa-plus-circle"></i> Agregar Productos</button>
    </a>
    <a href="?p=agregar_categoria">
    <button class="btn btn-info"><i class=" fa fa-plus-circle"></i> Agregar Categoria</button>
    </a>
    <?php
}else{ /*Si no hay sesion iniciada */
    ?>
    <center class="login-admin-center">
    <form method="post" action="">
        <div class="login-admin">
            <label><h2><i class="fa fa-key"></i> Iniciar Sesión Administrador</h2></label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Usuario" name="username"/>
        </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
    </div>
    <div class="form-group">
        <button class="btn btn-submit" name="enviar" type="submit"><i class="fa fa-sign-in">
        </i>Ingresar</button>
    </div>
    </form>
    </center>
    <?php
}

?>