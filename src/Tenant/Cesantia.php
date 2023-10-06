<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Cesantia extends Model{ 
    use UsesTenantConnection;
 protected $table = 'entidades_cesantias';
 public $timestamps = true;
}



