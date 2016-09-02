<?php

use Illuminate\Database\Seeder;

use App\Models\UserType;

class TypeUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new UserType;
        $type->type = 'admin';
        $type->save();

        $type = new UserType;
        $type->type = 'invited';
        $type->save();
    }
}
