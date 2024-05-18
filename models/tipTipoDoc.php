<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Models\DocDocumento;

class TipTipoDoc extends Model
{
    protected $table = 'TIP_TIPO_DOC';
    protected $primaryKey = 'TIP_ID';

    protected $fillable = [
        'TIP_NOMBRE', 'TIP_PREFIJO'
    ];

    /**
     * Relación con los documentos asociados a este tipo de documento
     *
     * @return HasMany
     */
    public function documentos(): HasMany
    {
        return $this->hasMany(DocDocumento::class, 'fk_doc_id_tipo');
    }

    /**
     * Asigna el valor del campo TIP_NOMBRE
     *
     * @param string $value
     * @return void
     */
    public function setTipNombre($value): void
    {
        $this->attributes['TIP_NOMBRE'] = $value;
    }

    /**
     * Asigna el valor del campo TIP_PREFIJO
     *
     * @param string $value
     * @return void
     */
    public function setTipPrefijo($value): void
    {
        $this->attributes['TIP_PREFIJO'] = $value;
    }

    /**
     * Obtiene el valor del campo TIP_NOMBRE
     *
     * @return string
     */
    public function getTipNombre(): string
    {
        return $this->attributes['TIP_NOMBRE'];
    }

    /**
     * Obtiene el valor del campo TIP_PREFIJO
     *
     * @return string
     */
    public function getTipPrefijo(): string
    {
        return $this->attributes['TIP_PREFIJO'];
    }
}
