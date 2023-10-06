<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Insertin extends Model{ 
     use UsesTenantConnection;
 protected $table = 'nomina_insertos';
 public $timestamps = false;
  public function empleados(){

          return $this->belongsTo('\DigitalsiteSaaS\Progresiveapp\Tenant\Empleado');
     }

     public function novedades(){

          return $this->belongsTo('\DigitalsiteSaaS\Progresiveapp\Tenant\Novedad');
     }
}

