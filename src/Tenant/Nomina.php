<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model{ 
    use UsesTenantConnection;
 protected $table = 'nomina_nomina';
 public $timestamps = true;
}



