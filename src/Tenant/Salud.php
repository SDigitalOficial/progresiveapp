<?php
namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Salud extends Model{ 
    use UsesTenantConnection;
 protected $table = 'entidades_salud';
 public $timestamps = true;
}




