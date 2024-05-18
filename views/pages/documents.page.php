<!DOCTYPE html>
<html lang="es">
<?php

use Models\ProProceso;
use Models\TipTipoDoc;

include 'views/includes/config_head.layout.php'; ?>

<body>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de documento</th>
                <th scope="col">Codigo</th>
                <th scope="col">Contenido</th>
                <th scope="col">Tipo de documento</th>
                <th scope="col">Tipo de proceso</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($docs as $doc) : ?>
                <tr>
                    <th scope="row"><?= $doc->DOC_ID ?></th>
                    <td><?= $doc->DOC_NOMBRE ?></td>
                    <td><?= $doc->DOC_CODIGO ?></td>
                    <td><?= $doc->DOC_CONTENIDO ?></td>
                    <td><?= TipTipoDoc::find($doc->DOC_ID_TIPO)->TIP_NOMBRE ?></td>
                    <td><?= ProProceso::find($doc->DOC_ID_PROCESO)->PRO_NOMBRE ?></td>
                    <td>
                        <form action="deleteDocument/delete" method="post">
                            <input type="hidden" name="id" value="<?= $doc->DOC_ID ?>">
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                        <form action="updateDocument/update" method="post">
                            <input type="hidden" name="id" value="<?= $doc->DOC_ID ?>">
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>