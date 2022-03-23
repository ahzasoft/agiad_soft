<?php

namespace Modules\Assets\Entities;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $guarded =['id'];
    protected $table ='assets';
}
