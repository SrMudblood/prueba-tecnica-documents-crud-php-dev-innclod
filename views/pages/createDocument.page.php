<!DOCTYPE html>
<html lang="es">
<?php

include 'views/includes/config_head.layout.php'; ?>

<body>
    <main class="container">
        <form action="/createDocument/create" method="post">
            <div>
                <div class="form-group">
                    <label for="docNombre">Nombre del documento</label>
                    <input type="text" class="form-control" id="docNombre" name="docNombre" required>
                </div>
                <div class="form-group">
                    <label for="docContenido">Contenido</label>
                    <textarea class="form-control" id="docContenido" name="docContenido" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="docIdTipo">Tipo de documento</label>
                    <select class="form-control" id="docIdTipo" name="docIdTipo">
                        <option value="0">Seleccione un tipo de documento</option>
                        <?php foreach ($docsTypes as $tipo) : ?>
                            <option value="<?= $tipo->TIP_ID ?>"><?= $tipo->TIP_NOMBRE ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="docIdProceso">Tipo de proceso</label>
                    <select class="form-control" id="docIdProceso" name="docIdProceso">
                        <option value="0">Seleccione un tipo de proceso</option>
                        <?php foreach ($docsProcesses as $proceso) : ?>
                            <option value="<?= $proceso->PRO_ID ?>"><?= $proceso->PRO_NOMBRE ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div id="buttons">
                <button type="submit" class="btn btn-primary">Crear</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/documents'">Cancelar</button>
            </div>
        </form>
    </main>
</body>

</html>

<?php include 'views/includes/formDocumentStyles.php'; ?>