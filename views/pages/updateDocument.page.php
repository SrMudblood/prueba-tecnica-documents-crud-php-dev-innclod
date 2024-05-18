<!DOCTYPE html>
<html lang="es">
<?php

include 'views/includes/config_head.layout.php'; ?>

<body>
    <div class="container">
        <form action="/updateDocument/update" method="post">
            <div class="form-group">
                <label for="docNombre">Nombre del documento</label>
                <input type="text" class="form-control" id="docNombre" name="docNombre" value="<?= $doc->DOC_NOMBRE ?>" required>
            </div>
            <div class="form-group">
                <label for="docContenido">Contenido</label>
                <textarea class="form-control" id="docContenido" name="docContenido" rows="5" required><?= $doc->DOC_CONTENIDO ?></textarea>
            </div>
            <div class="form-group">
                <label for="docIdTipo">Tipo de documento</label>
                <select class="form-control" id="docIdTipo" name="docIdTipo">
                    <?php foreach ($docsTypes as $tipo) : ?>
                        <option value="<?= $tipo->TIP_ID ?>" <?= $tipo->TIP_ID == $doc->DOC_ID_TIPO ? 'selected' : '' ?>><?= $tipo->TIP_NOMBRE ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="docIdProceso">Tipo de proceso</label>
                <select class="form-control" id="docIdProceso" name="docIdProceso">
                    <?php foreach ($docsProcesses as $proceso) : ?>
                        <option value="<?= $proceso->PRO_ID ?>" <?= $proceso->PRO_ID == $doc->DOC_ID_PROCESO ? 'selected' : '' ?>><?= $proceso->PRO_NOMBRE ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="hidden" name="id" value="<?= $doc->DOC_ID ?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>

</html>