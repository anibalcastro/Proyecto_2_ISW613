<body>
    <header id="encabezado">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <div class="header">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c4/Telefe_Noticias_logo_2_%282018%29.png"
                        id="logo_empresa" alt="icon" srcset="logo icon">
            </a>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-dark" disabled="disabled">admin -
                    <?php echo $nombreUsuario ?></button>
                <a type="button" href="http://utnweb.com/web2/Proyecto_1_ISW613/Administrador/ceCategoria.php"
                    class="btn btn-dark">Categories</a>
                <form action="logout.php" method="post">
                    <button type="submit" class="btn btn-dark">Log out</button>
                </form>

            </div>
            </div>

        </nav>
    </header>