<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbearia extends Model
{
    use HasFactory;

    protected $table = 'barbearias';

    protected $primaryKey = 'id';

    protected $fillable = ['nome','preco'];

    public $timestamps = false;
}
