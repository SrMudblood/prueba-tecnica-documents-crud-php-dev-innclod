<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class ProProceso extends Model
{
    protected $table = 'PRO_PROCESO';
    protected $primaryKey = 'PRO_ID';

    protected $fillable = [
        'PRO_NOMBRE', 'PRO_PREFIJO'
    ];

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
