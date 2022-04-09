    <!-- Cuerpo -->
    <div>
        <form action="save.php" method="post">
            <input type="hidden" id="dniCategory" name="idCategory" value="<?php echo $id ?>">
            <input name="nameCategory" type="text" class="form-control" placeholder="Cateogry Name"
                value="<?php echo $nombreCategoria ?>">
            <div class="linea_100"></div>
            <input id="btnSave" type="submit" name="btnSave" value="Save" class="btn btn-dark">
        </form>
    </div>