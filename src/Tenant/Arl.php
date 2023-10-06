<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Arl extends Model{ 
    use UsesTenantConnection;
 protected $table = 'entidades_arl';
 public $timestamps = true;
}


