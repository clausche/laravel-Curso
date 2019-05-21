<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permiso;

class PermisoTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class, 20)->create();
    }
}
