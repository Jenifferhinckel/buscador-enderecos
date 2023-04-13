<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $table='cep';

    /**
     * @var bool
     */
    public $incrementing=false;

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'cep',
        'logradouro',
        'complemento',
        'bairro',
        'localidade',
        'uf',
        'ibge',
        'gia',
        'ddd',
        'siafi'
    ];
}
