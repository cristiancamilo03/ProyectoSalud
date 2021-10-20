<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historialModel extends Model
{
    protected $table='historial';

    protected $primaryKey='idHistorial';

    public $timestamps= false;

}
