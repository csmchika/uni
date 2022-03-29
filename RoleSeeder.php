<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Role();
        $manager->name = 'Php dev';
        $manager->slug = 'Php-dev';
        $manager->save();
        $developer = new Role();
        $developer->name = 'Js dev';
        $developer->slug = 'Js-dev';
        $developer->save();
    }
}
