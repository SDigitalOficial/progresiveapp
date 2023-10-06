<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model{ 
 use UsesTenantConnection;
 protected $table = 'bancos';
 public $timestamps = true;
}

