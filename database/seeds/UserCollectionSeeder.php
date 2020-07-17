<?php

use Illuminate\Database\Seeder;

class UserCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 10)
            ->create()
            ->each(function ($user) {
                $user->posts()->createMany(
                    factory(App\Post::class,5)->make()->toArray()
                );
            });
        $comentarios = App\Post::all();
        foreach($comentarios as $comentario){
            $comentario->comments()->createMany(
                factory(App\Comment::class,5)->make()->toArray()
            );
        }
    }
}
