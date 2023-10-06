<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model{
     use UsesTenantConnection;
 protected $table = 'periodos';
 public $timestamps = true;
}

