<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'features'; // Nome da tabela no banco de dados

    protected $fillable = ['description', 'longitude', 'latitude']; // Colunas que podem ser atribuídas em massa

    // Outras configurações, como timestamps, chave primária, etc., podem ser definidas conforme necessário
}

