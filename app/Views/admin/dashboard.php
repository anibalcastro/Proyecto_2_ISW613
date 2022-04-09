<div class="jumbotron">
    <h1 class="display-4">Categories</h1>
    <div class="linea_100"></div>
</div>

<table class="table">
    <thead class="table-light">
        <tr>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    foreach ($categorias as $iterador)
    {
      $nameCategory = $iterador[1];
      $urlEditar = "http://utnweb.com/web2/Proyecto_1_ISW613/Administrador/ceCategoria.php?status=success&message=" . $iterador[0];
      $urlEliminar = "http://utnweb.com/web2/Proyecto_1_ISW613/Administrador/delete.php?status=success&message=" . $iterador[0];

      echo "
        <tr>
        <td> $nameCategory </td>
        <td><a id=\"edit" . "\" href=\"$urlEditar" . "\"  class=\"btn btn-default" . "\" aria-label=\"Left Align" . "\">Edit</a>
        | 
        <a id=\"delete" . "\" href=\"$urlEliminar" . "\"  class=\"btn btn-default" . "\" aria-label=\"Left Align" . "\">Delete</a> </td>
        </tr>
        ";
    }
    ?>

    </tbody>
</table>

<div class="btnAdd">
    <a type="button" href="http://utnweb.com/web2/Proyecto_1_ISW613/Administrador/ceCategoria.php"
        class="btn btn-dark">Add New</a>
</div>