<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = "users";

    protected $fillable = [
        "username",
        "pass",
    ];

    /**
     * Asigna el valor del campo username
     *
     * @param string $value
     * @return void
     */
    public function setUsername($value): void
    {
        $this->attributes['username'] = $value;
    }

    /**
     * Asigna el valor del campo pass
     *
     * @param string $value
     * @return void
     */
    public function setPass($value): void
    {
        $this->attributes['pass'] = $value;
    }

    /**
     * Obtiene el valor del campo username
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->attributes['username'];
    }

    /**
     * Obtiene el valor del campo pass
     *
     * @return string
     */
    public function getPass(): string
    {
        return $this->attributes['pass'];
    }
}
