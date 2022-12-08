<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'birth_date',
        'address',
        'address_cep',
        'address_number',
        'address_complement',
        'address_district',
        'address_city'
    ];
}
