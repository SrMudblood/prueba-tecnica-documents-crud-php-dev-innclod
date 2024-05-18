<?php

use Models\DocDocumento;
use Models\TipTipoDoc;
use Models\ProProceso;

class CreateDocumentController
{
    public function create()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            if (
                isset($_POST['docNombre']) &&
                isset($_POST['docContenido']) &&
                ($_POST['docIdTipo'] ?? 0) != 0 &&
                ($_POST['docIdProceso'] ?? 0) != 0
            ) {
                $documento = new DocDocumento();
                $documento->setDocNombre($_POST['docNombre']);
                $documento->setDocContenido($_POST['docContenido']);
                $documento->setDocIdTipo($_POST['docIdTipo']);
                $documento->setDocIdProceso($_POST['docIdProceso']);

                $codigo = TipTipoDoc::find($documento->getDocIdTipo())->TIP_PREFIJO .
                    "-" . ProProceso::find($documento->getDocIdProceso())->PRO_PREFIJO . "-";

                $doc = DocDocumento::where('DOC_CODIGO', 'LIKE', $codigo . '%')
                    ->OrderBy('DOC_CODIGO', 'desc')
                    ->first();

                if ($doc) {
                    $fullCodigo = $doc->DOC_CODIGO;
                    $ultimoId = (int) str_replace("$codigo", '', $fullCodigo);
                    $nuevoId = $ultimoId + 1;
                } else {
                    $nuevoId = 1;
                }

                $documento->setDocCodigo($codigo . $nuevoId);
                $documento->save();

                header('Location: /documents');
                exit;
            } else {
                header('Location: /documents/create');
                exit;
            }
        } else {
            header('Location: /');
            exit;
        }
    }
}
