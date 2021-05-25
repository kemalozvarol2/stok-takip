<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new = new User();
        $new->id = 1;
        $new->name = 'Kemal';
        $new->email = 'a@a.a';
        $new->password = Hash::make('1234');
        $new->save();
    }
}
