<?php

use App\Answer;
use App\Question;
use Illuminate\Database\Seeder;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UserSeeder::class);
        // factory(Question::class,20)->create();
        //factory(Answer::class,50)->create();
        factory(Question::class,20)->create();
        factory(Answer::class,50)->create();
    }
}
