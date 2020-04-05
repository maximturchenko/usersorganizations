<?php

use Illuminate\Database\Seeder;
use App\Users;

class create_users_forapp__table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        Users::create(array(
            'lastname' => 'Рисов',
            'middlename' => 'Борисов'
            'firstname' => 'Борис',
            'email' => 'borislubluris@gmail.com'
            'phone' => '880043353', 
        ));
    }
}
