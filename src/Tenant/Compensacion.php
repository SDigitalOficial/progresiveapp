<?php

namespace DigitalsiteSaaS\Progresiveapp\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Compensacion extends Model{
    use UsesTenantConnection;
 protected $table = 'entidades_compensaciones';
 public $timestamps = true;
}


