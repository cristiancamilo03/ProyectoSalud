<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lectorModel extends Model
{
    protected $table='lectorImagenes';

    protected $primaryKey='idImagen';

    public $timestamps= false;

}