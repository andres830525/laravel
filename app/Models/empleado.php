<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = "empleados";
    protected $fillable = ['nombre','email','sexo','area_id','boletin','descripcion' ];
    use HasFactory;

    public function area()
    {
        return $this->belongsTo('App\Models\area');
    }
    public function roles()
    {
        return $this->hasMany('App\Models\rolesemp');
    }
}
