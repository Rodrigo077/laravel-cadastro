<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PessoaModel extends Model
{
    //
    protected $table = "pessoa";
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'sobrenome'];
}
