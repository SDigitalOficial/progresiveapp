<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Informacion extends Model{ 
 use UsesTenantConnection;
 protected $table = 'nomina_informacion';
 public $timestamps = true;
}



