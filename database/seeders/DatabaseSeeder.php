<?php

namespace Database\Seeders;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create()->each(function($u){
            $u->questions()
            ->saveMany(
             Question::factory(rand(1,5))->make()
            );
        });
    }
}
