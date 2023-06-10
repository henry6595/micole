<?php
require '../../../conexionbd/connectDB.php';

$sql = "SELECT id, palabra_clave from noticias";
$result = mysqli_query(DBi::$mysqli, $sql);
?>
<div class="form-group">
    <div class="col-xs-3 col-sm-6 col-lg-8 "></div>
    <div class="col-xs-9 col-sm-6 col-lg-4 ">
        <label>Palabra clave:</label>
        <select class="form-control select2" id="buscadorvivo" name="buscadorvivo" style="width: 100%;" required>
            <option value="0">todos</option>
            <?php
            while ($ver = mysqli_fetch_row($result)):
                ?>
                <option value="<?php echo $ver[0] ?>">
                    <?php echo $ver[1] ?>
                </option>
            <?php endwhile; ?>
        </select>
    </div>
</div>



<script type="text/javascript">
    $('#buscadorvivo').select2();
    
    $(document).ready(function () {
        $('#buscadorvivo').change(function () {
            $.ajax({
                type: "post",
                data: 'valor=' + $('#buscadorvivo').val(),
                url: 'componentes/php/crearsession.php',
                success: function (r) {
                    $('#tabla_noticias').load('componentes/tabla_noticias.php');
                }
            });
        });
    });
</script>