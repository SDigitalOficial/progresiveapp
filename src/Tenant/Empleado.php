<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{ 
 use UsesTenantConnection;
 protected $table = 'nomina_empleados';
 public $timestamps = true;

 public function novedades(){
  return $this->hasMany('\DigitalsiteSaaS\Progresiveapp\Tenant\Novedad');

    }
 public function insertos(){
  return $this->hasMany('\DigitalsiteSaaS\Progresiveapp\Tenant\Insertin');

    }


}

