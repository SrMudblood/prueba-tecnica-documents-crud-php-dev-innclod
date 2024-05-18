<?php

use Models\DocDocumento;

class DeleteDocumentController
{
    public function delete()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            if (isset($_POST['id'])) {
                $doc = DocDocumento::find($_POST['id']);
                if ($doc) {
                    $doc->delete();
                }
            }
            header('Location: /documents');
        }
    }
}
