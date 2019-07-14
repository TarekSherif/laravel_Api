<?php

use Illuminate\Database\Seeder;

class PostsSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Post::class,100)->create();
    }
}
