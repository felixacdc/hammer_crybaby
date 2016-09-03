<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(TypeUserTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $post = factory('App\Models\Local', 50)->create();

        Model::reguard();
    }
}
