<?php

use Models\DocDocumento;
use Models\TipTipoDoc;
use Models\ProProceso;

class DocumentsController
{

    # TODO: Add a login check
    public function index()
    {
        if ($_SESSION['auth'] ?? false == true) {
            $docs = DocDocumento::all();
            include 'views/pages/documents.page.php';
        } else {
            header('Location: /');
        }
    }
}
