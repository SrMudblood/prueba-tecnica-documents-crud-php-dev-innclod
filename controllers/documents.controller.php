<?php

use Models\DocDocumento;
use Models\TipTipoDoc;
use Models\ProProceso;

class DocumentsController
{

    public function index()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            $docs = DocDocumento::all();
            include 'views/pages/documents.page.php';
        } else {
            header('Location: /');
        }
    }

    public function create()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            $docsTypes = TipTipoDoc::all();
            $docsProcesses = ProProceso::all();
            include 'views/pages/createDocument.page.php';
        } else {
            header('Location: /');
        }
    }
}
