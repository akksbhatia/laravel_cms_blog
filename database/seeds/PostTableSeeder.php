<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the post table
        DB::table('posts')->truncate();

        //generate 10 dummy posts

        $posts = [];
        $faker = Factory::create();

        for ($i=1;$i<=10;$i++)
        {
            $image = "post_image_" . rand(1,5) . ".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2019-02-27 12:08:00 +{$i} days"));
            $posts[] = [
                'author_id' => rand(1,3),
                'title' => $faker->sentence(rand(8,12)),
                'excerpt' => $faker->text(rand(250,300)),
                'body' => $faker->paragraphs(rand(10,15),true),
                'slug' =>$faker->slug(),
                'image'=>rand(0,1) == 1 ? $image : NULL,
                'created_at' => $date,
                'updated_at' => $date,

            ];
        }
        DB::table('posts')->insert($posts);
    }
}
