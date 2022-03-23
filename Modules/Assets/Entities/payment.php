<?php

namespace Modules\Assets\Entities;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table='partner_payments';
    protected $guarded =['id'];
}
