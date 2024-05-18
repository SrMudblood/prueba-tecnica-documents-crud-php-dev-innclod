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
            exit;
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
            exit;
        }
    }

    public function update()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            if (isset($_POST['id'])) {
                $doc = DocDocumento::find($_POST['id']);
                $docsTypes = TipTipoDoc::all();
                $docsProcesses = ProProceso::all();
                require 'views/pages/updateDocument.page.php';
            } else {
                header('Location: /documents');
                exit;
            }
        } else {
            header('Location: /');
            exit;
        }
    }
}
