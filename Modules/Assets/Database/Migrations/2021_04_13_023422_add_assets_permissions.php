<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;

class AddAssetsPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*  Permission::create(['name' => 'assets.view']);
        Permission::create(['name' => 'assets.create']);
        Permission::create(['name' => 'assets.edit']);
        Permission::create(['name' => 'assets.delete']);*/


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*$data=Permission::where('name','like','assets%')->delete();*/
       // dd($data);
    }
}
