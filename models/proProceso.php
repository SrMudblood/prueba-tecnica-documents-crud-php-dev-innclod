<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Models\DocDocumento;

class ProProceso extends Model
{
    protected $table = 'PRO_PROCESO';
    protected $primaryKey = 'PRO_ID';

    protected $fillable = [
        'PRO_NOMBRE', 'PRO_PREFIJO'
    ];

    /**
     * Relación con los documentos asociados a este proceso
     *
     * @return HasMany
     */
    public function documentos(): HasMany
    {
        return $this->hasMany(DocDocumento::class, 'fk_doc_id_proceso');
    }

    /**
     * Asigna el valor del campo PRO_NOMBRE
     *
     * @param string $value
     * @return void
     */
    public function setProNombre($value): void
    {
        $this->attributes['PRO_NOMBRE'] = $value;
    }

    /**
     * Asigna el valor del campo PRO_PREFIJO
     *
     * @param string $value
     * @return void
     */
    public function setProPrefijo($value): void
    {
        $this->attributes['PRO_PREFIJO'] = $value;
    }

    /**
     * Obtiene el valor del campo PRO_NOMBRE
     *
     * @return string
     */
    public function getProNombre(): string
    {
        return $this->attributes['PRO_NOMBRE'];
    }

    /**
     * Obtiene el valor del campo PRO_PREFIJO
     *
     * @return string
     */
    public function getProPrefijo(): string
    {
        return $this->attributes['PRO_PREFIJO'];
    }
}
