<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Models\TipTipoDoc;
use Models\ProProceso;

class DocDocumento extends Model
{
    protected $table = 'DOC_DOCUMENTO';
    protected $primaryKey = 'DOC_ID';

    protected $fillable = [
        'DOC_NOMBRE', 'DOC_CODIGO', 'DOC_CONTENIDO', 'DOC_ID_TIPO', 'DOC_ID_PROCESO'
    ];

    public function tipoDocumento(): BelongsTo
    {
        return $this->belongsTo(TipTipoDoc::class, 'fk_doc_id_tipo');
    }

    public function proceso(): BelongsTo
    {
        echo $this->attributes['DOC_ID_PROCESO'];
        return $this->belongsTo(ProProceso::class, 'fk_doc_id_proceso');
    }

    /**
     * Asigna el valor del campo DOC_NOMBRE
     *
     * @param string $value
     * @return void
     */
    public function setDocNombre($value): void
    {
        $this->attributes['DOC_NOMBRE'] = $value;
    }

    /**
     * Asigna el valor del campo DOC_CODIGO
     *
     * @param string $value
     * @return void
     */
    public function setDocCodigo($value): void
    {
        $this->attributes['DOC_CODIGO'] = $value;
    }

    /**
     * Asigna el valor del campo DOC_CONTENIDO
     *
     * @param string $value
     * @return void
     */
    public function setDocContenido($value): void
    {
        $this->attributes['DOC_CONTENIDO'] = $value;
    }

    /**
     * Asigna el valor del campo DOC_ID_TIPO
     *
     * @param int $value
     * @return void
     */
    public function setDocIdTipo($value): void
    {
        $this->attributes['DOC_ID_TIPO'] = (int) $value;
    }

    /**
     * Asigna el valor del campo DOC_ID_PROCESO
     *
     * @param int $value
     * @return void
     */
    public function setDocIdProceso($value): void
    {
        $this->attributes['DOC_ID_PROCESO'] = (int) $value;
    }

    /**
     * Obtiene el valor del campo DOC_NOMBRE
     *
     * @return string
     */
    public function getDocNombre(): string
    {
        return $this->attributes['DOC_NOMBRE'];
    }

    /**
     * Obtiene el valor del campo DOC_CODIGO
     *
     * @return string
     */
    public function getDocCodigo(): string
    {
        return $this->attributes['DOC_CODIGO'];
    }

    /**
     * Obtiene el valor del campo DOC_CONTENIDO
     *
     * @return string
     */
    public function getDocContenido(): string
    {
        return $this->attributes['DOC_CONTENIDO'];
    }

    /**
     * Obtiene el valor del campo DOC_ID_TIPO
     *
     * @return int
     */
    public function getDocIdTipo(): int
    {
        return $this->attributes['DOC_ID_TIPO'];
    }

    /**
     * Obtiene el valor del campo DOC_ID_PROCESO
     *
     * @return int
     */
    public function getDocIdProceso(): int
    {
        return $this->attributes['DOC_ID_PROCESO'];
    }
}
