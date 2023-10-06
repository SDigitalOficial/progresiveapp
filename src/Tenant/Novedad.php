<?php


namespace DigitalsiteSaaS\Progresiveapp\Tenant;


use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model{ 
     use UsesTenantConnection;
 protected $table = 'nomina_novedades';
 public $timestamps = true;
 public function empleados(){

          return $this->belongsTo('\DigitalsiteSaaS\Progresiveapp\Tenant\Empleado');
     }


    public function insertos(){

          return $this->belongsTo('\DigitalsiteSaaS\Progresiveapp\Tenant\Insertin');
     }

}