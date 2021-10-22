<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informeModel extends Model
{
    protected $table='informe';

    protected $primaryKey='idInforme';

    public $timestamps= false;

}
