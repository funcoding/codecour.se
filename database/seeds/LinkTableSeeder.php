<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $code = str_random(6);
        DB::table('links')->insert([
            'code' => $code,
            'url' => 'https://www.codecourse.com/',
        ]);
        echo("Do not forget to add /".$code." after the URL".PHP_EOL);
    }
}
