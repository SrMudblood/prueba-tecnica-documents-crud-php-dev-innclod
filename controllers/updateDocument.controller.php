<?php

use Models\DocDocumento;
use Models\TipTipoDoc;
use Models\ProProceso;

class UpdateDocumentController
{
    public function update()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            if (isset($_POST['id'])) {
                $doc = DocDocumento::find($_POST['id']);
                if ($doc) {
                    if ($_POST['docNombre'] != $doc->DOC_NOMBRE) {
                        $doc->setDocNombre($_POST['docNombre']);
                    }
                    if ($_POST['docContenido'] != $doc->DOC_CONTENIDO) {
                        $doc->setDocContenido($_POST['docContenido']);
                    }
                    $nuevoCodigo = false;
                    if ($_POST['docIdTipo'] != $doc->DOC_ID_TIPO) {
                        $doc->setDocIdTipo($_POST['docIdTipo']);
                        $nuevoCodigo = true;
                    }
                    if ($_POST['docIdProceso'] != $doc->DOC_ID_PROCESO) {
                        $doc->setDocIdProceso($_POST['docIdProceso']);
                        $nuevoCodigo = true;
                    }
                    if ($nuevoCodigo) {
                        $codigo = TipTipoDoc::find($doc->getDocIdTipo())->TIP_PREFIJO .
                            "-" . ProProceso::find($doc->getDocIdProceso())->PRO_PREFIJO . "-";

                        $docObtenido = DocDocumento::where('DOC_CODIGO', 'LIKE', $codigo . '%')
                            ->OrderBy('DOC_CODIGO', 'desc')
                            ->first();

                        if ($docObtenido) {
                            $fullCodigo = $docObtenido->DOC_CODIGO;
                            $ultimoId = (int) str_replace("$codigo", '', $fullCodigo);
                            $nuevoId = $ultimoId + 1;
                        } else {
                            $nuevoId = 1;
                        }

                        $doc->setDocCodigo($codigo . $nuevoId);
                    }
                }
                $doc->save();
                header('Location: /documents');
            } else {
                header('Location: /documents');
            }
        } else {
            header('Location: /');
        }
    }
}
