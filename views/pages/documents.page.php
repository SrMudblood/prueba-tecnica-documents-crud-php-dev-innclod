<!DOCTYPE html>
<html lang="es">
<?php

use Models\ProProceso;
use Models\TipTipoDoc;

include 'views/includes/config_head.layout.php'; ?>

<body>
    <main id="container">
        <?php include 'views/includes/navbar.layout.php'; ?>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width: 5%;">ID</th>
                    <th scope="col" style="width: 20%;">Nombre</th>
                    <th scope="col" style="width: 10%;">Codigo</th>
                    <th scope="col" style="width: 30%;">Contenido</th>
                    <th scope="col" style="width: 10%;">Tipo</th>
                    <th scope="col" style="width: 10%;">Proceso</th>
                    <th scope="col" style="width: 15%; text-align: right;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($docs as $doc) : ?>
                    <tr>
                        <td campo="ID del documento:"><strong><?= $doc->DOC_ID ?></strong></td>
                        <td campo="Nombre del documento:"><?= $doc->DOC_NOMBRE ?></td>
                        <td campo="Código:"><?= $doc->DOC_CODIGO ?></td>
                        <td campo="Contenido:"><?= $doc->DOC_CONTENIDO ?></td>
                        <td campo="Tipo de documento:"><?= TipTipoDoc::find($doc->DOC_ID_TIPO)->TIP_NOMBRE ?></td>
                        <td campo="Tipo de proceso:"><?= ProProceso::find($doc->DOC_ID_PROCESO)->PRO_NOMBRE ?></td>
                        <td>
                            <div class="d-flex flex-row gap-2 h-100 w-100">
                                <form action="deleteDocument/delete" method="post">
                                    <input type="hidden" name="id" value="<?= $doc->DOC_ID ?>">
                                    <button type="submit" class="btn btn-danger">
                                        <img src="src/delete.svg" alt="delete">
                                    </button>
                                </form>
                                <form action="documents/update" method="post">
                                    <input type="hidden" name="id" value="<?= $doc->DOC_ID ?>">
                                    <button type="submit" class="btn btn-warning">
                                        <img src="src/update.svg" alt="edit">
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>

</html>

<style>
    button[type="submit"] {
        padding: 6px;
        border-radius: 25%;
    }

    #container {
        width: 100%;
        padding: 0.5em 0.5em;
    }

    .table {
        margin-bottom: 2em;
        margin-top: 2em;
    }

    .table td:last-child div {
        justify-content: end;
    }

    @media (max-width: 768px) {

        .table,
        .table thead,
        .table tbody,
        .table th,
        .table td,
        .table tr {
            display: block;
            width: 100%;
        }

        .table td {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.25em 0.5em;
        }

        .table thead {
            display: none;
        }

        .table td::before {
            content: attr(campo);
            font-weight: bold;
        }

        .table td:first-child {
            font-weight: bold;
        }

        .table td:nth-child(2),
        .table td:nth-child(4) {
            display: block;
        }

        .table td:last-child div {
            padding-bottom: 3em;
            justify-content: center;
            margin-top: 0.5em;
        }

        .table td:nth-child(2)::before,
        .table td:nth-child(4)::before {
            display: block;
        }

    }

    @media (min-width: 768px) {
        body {
            font-size: 1em;
        }
    }

    @media (min-width: 992px) {
        #container {
            max-width: 992px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (min-width: 1200px) {
        #container {
            max-width: 1200px;
        }
    }
</style>