<?php

use Illuminate\Database\Seeder;

class PostsCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 5)->create();
        //
    }
}
