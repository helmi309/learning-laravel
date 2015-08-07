<?php

use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Guest')->truncate();


        DB::table('Guest')->insert([
            'name' => 'maya',
            'phone' => '098788766',
            'email' => 'helmi@gmail.com',
            'sites' => 'http://helmi.com',
            'message' => 'ingat anak di rumah'
        ]);
    }
}
