<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Joe Mdr',
            'username' => 'joe06',
            'email' => 'JoeMdr@gmail.com',
            'password' => bcrypt('q1234567')
        ]);

        // User::create([
        //     'name'=> 'The Real',
        //     'email'=> 'thereal@gmail.com',
        //     'password'=> bcrypt('q1234567')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(30)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti. Fuga molestias voluptate vel consequuntur officia est saepe! Necessitatibus delectus earum dolores quasi numquam consequatur, deleniti itaque, aperiam autem esse doloremque inventore libero similique quam fugiat officiis totam distinctio tenetur cum deserunt. Ea repellat ad beatae porro! Sed, reprehenderit! Eum vel nostrum eos. Doloremque reiciendis vitae sapiente maxime omnis. Aut odio natus iure quidem pariatur? Et laborum deleniti vitae earum incidunt ex reiciendis magni ratione animi ad unde quos nisi dolorem nihil, consectetur nemo. Nam, sed ipsam voluptatum veritatis distinctio, a fugit fuga provident delectus architecto deleniti libero minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti. Fuga molestias voluptate vel consequuntur officia est saepe! Necessitatibus delectus earum dolores quasi numquam consequatur, deleniti itaque, aperiam autem esse doloremque inventore libero similique quam fugiat officiis totam distinctio tenetur cum deserunt. Ea repellat ad beatae porro! Sed, reprehenderit! Eum vel nostrum eos. Doloremque reiciendis vitae sapiente maxime omnis. Aut odio natus iure quidem pariatur? Et laborum deleniti vitae earum incidunt ex reiciendis magni ratione animi ad unde quos nisi dolorem nihil, consectetur nemo. Nam, sed ipsam voluptatum veritatis distinctio, a fugit fuga provident delectus architecto deleniti libero minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti. Fuga molestias voluptate vel consequuntur officia est saepe! Necessitatibus delectus earum dolores quasi numquam consequatur, deleniti itaque, aperiam autem esse doloremque inventore libero similique quam fugiat officiis totam distinctio tenetur cum deserunt. Ea repellat ad beatae porro! Sed, reprehenderit! Eum vel nostrum eos. Doloremque reiciendis vitae sapiente maxime omnis. Aut odio natus iure quidem pariatur? Et laborum deleniti vitae earum incidunt ex reiciendis magni ratione animi ad unde quos nisi dolorem nihil, consectetur nemo. Nam, sed ipsam voluptatum veritatis distinctio, a fugit fuga provident delectus architecto deleniti libero minima.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, esse corrupti. Fuga molestias voluptate vel consequuntur officia est saepe! Necessitatibus delectus earum dolores quasi numquam consequatur, deleniti itaque, aperiam autem esse doloremque inventore libero similique quam fugiat officiis totam distinctio tenetur cum deserunt. Ea repellat ad beatae porro! Sed, reprehenderit! Eum vel nostrum eos. Doloremque reiciendis vitae sapiente maxime omnis. Aut odio natus iure quidem pariatur? Et laborum deleniti vitae earum incidunt ex reiciendis magni ratione animi ad unde quos nisi dolorem nihil, consectetur nemo. Nam, sed ipsam voluptatum veritatis distinctio, a fugit fuga provident delectus architecto deleniti libero minima.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
