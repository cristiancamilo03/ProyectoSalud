<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table='usuarios';

    protected $primaryKey='idDat';

    public $timestamps= false;
}
