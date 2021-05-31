<!-- Modal modificar jugador-->

<?php

require "conexion.php";

?>

<!--Modal Nombre-->

<div class='modal fade' id='edicionNombre' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action="modificarJugadorQuery.php" method="get">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Nombre</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <input class='' name='textId' type='hidden' value='<?php echo $numero ?>'>
                    <input class='' name='nombre' value="<?php echo $nombre ?>" type='text'
                           placeholder='Escriba nuevo nombre'>
                    <input class='' name='nombreImg' type='hidden' value='<?php echo $nombre ?>'>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Número-->

<div class='modal fade' id='edicionNumero' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action="modificarJugadorQuery.php" method="get">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Nombre</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <input class='' name='textId' type='hidden' value='<?php echo $numero ?>'>
                    <input class='' name='numero' value="<?php echo $numero ?>" type='number'
                           placeholder='Escriba nuevo nombre'>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Posición-->

<div class='modal fade' id='edicionTipo' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action="modificarJugadorQuery.php" method="get">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Tipo</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>

                    <input class='' name='textId' type='hidden' value='<?php echo $numero ?>'>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='posicion' id='arquero' value='arquero'>
                        <label class='form-check-label' for='inlineCheckbox1'>Arquero</label>
                    </div>

                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='posicion' id='defensor' value='defensor'>
                        <label class='form-check-label' for='inlineCheckbox1'>Defensor</label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='posicion' id='mediocampista'
                               value='mediocampista'>
                        <label class='form-check-label' for='inlineCheckbox1'>Mediocampista</label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='posicion' id='delantero' value='delantero'>
                        <label class='form-check-label' for='inlineCheckbox1'>Delantero</label>
                    </div>

                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='  fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Descripción-->

<div class='modal fade' id='edicionDescripción' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action="modificarJugadorQuery.php" method="get">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Descripción</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='mb-3 mt-2 p-2'>
                    <input class='' name='textId' type='hidden' value='<?php echo $numero ?>'>
                    <textarea class='form-control' name='descripcion' id='descripcion'
                              placeholder='Escriba nueva descripción'></textarea>
                    <div class='invalid-feedback'>
                        Descripcion
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='  fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Foto-->

<div class='modal fade' id='edicionImagen' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <form action="modificarJugadorQuery.php" method="post" enctype="multipart/form-data">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Modificar Imágen</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>

                    <div class='mb-3'>
                        <label for='validationTextarea' class='form-label'>Seleccione una nueva imágen</label>
                        <input class='' name='textId' type='hidden' value='<?php echo $numero ?>'>
                        <input class='' name='nombre' type='hidden' value='<?php echo $nombre ?>'>
                        <input type='file' name='file' class='form-control' aria-label='file example'
                               value='<?php echo './imgJugadores/' . $nombre ?>' required>
                        <div class='invalid-feedback'>Example invalid form file feedback</div>
                    </div>


                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cerrar</button>
                    <button class='  fw-bolder btn btn-primary' type='submit' value='loguear'>Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- FIN Modal modificar jugador-->