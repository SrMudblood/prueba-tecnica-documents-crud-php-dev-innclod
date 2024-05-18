<?php

use Models\DocDocumento;
use Models\TipTipoDoc;
use Models\ProProceso;

class CreateDocumentController
{
    public function create()
    {
        if (($_SESSION['auth'] ?? false) == true) {
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
        } else {
            header('Location: /');
        }
    }
}