<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => "Teerapong",
            'lastname' => "Boonmak",
            'email' => "teerapong",
            'password' => bcrypt('123456'),
        ]);

         DB::table('users')->insert([
            'name' => "Kanyanat",
            'lastname' => "Wonghan",
            'email' => "kanyanat",
            'password' => bcrypt('123456'),
        ]);
         DB::table('users')->insert([
            'name' => "Bundid",
            'lastname' => "Rakk",
            'email' => "bundid",
            'password' => bcrypt('123456'),
        ]);
         DB::table('users')->insert([
            'name' => "Jirayu",
            'lastname' => "Wongyai",
            'email' => "jirayu",
            'password' => bcrypt('123456'),
        ]);
         DB::table('users')->insert([
            'name' => "Nadech",
            'lastname' => "Kukimiya",
            'email' => "nadech",
            'password' => bcrypt('123456'),
        ]);

         DB::table('report')->insert([
            'user_id' => 5,
            'point' => 5,
            'comment' => "You are so friendly",
            'comment_name' => "Teerapong Boonmak",
        ]);

         DB::table('report')->insert([
            'user_id' => 3,
            'point' => 4,
            'comment' => "Well",
            'comment_name' => "Teerapong Boonmak",
        ]);

         DB::table('report')->insert([
            'user_id' => 2,
            'point' => 5,
            'comment' => "You are so diligent",
            'comment_name' => "Teerapong Boonmak",
        ]);

         DB::table('report')->insert([
            'user_id' => 1,
            'point' => 5,
            'comment' => "Very Good",
            'comment_name' => "Kanyanat Wonghan",
        ]);

         DB::table('report')->insert([
            'user_id' => 3,
            'point' => 3,
            'comment' => "Not bad",
            'comment_name' => "Kanyanat Wonghan",
        ]);

         DB::table('report')->insert([
            'user_id' => 4,
            'point' => 4,
            'comment' => "Well Well",
            'comment_name' => "Kanyanat Wonghan",
        ]);

          DB::table('report')->insert([
            'user_id' => 1,
            'point' => 4,
            'comment' => "-",
            'comment_name' => "Bundid Rakk",
        ]);

          DB::table('report')->insert([
            'user_id' => 5,
            'point' => 4,
            'comment' => "Nice",
            'comment_name' => "Bundid Rakk",
        ]);

          DB::table('report')->insert([
            'user_id' => 4,
            'point' => 4,
            'comment' => "Good job",
            'comment_name' => "Bundid Rakk",
        ]);

          DB::table('report')->insert([
            'user_id' => 2,
            'point' => 5,
            'comment' => "Work hard",
            'comment_name' => "Bundid Rakk",
        ]);

          DB::table('report')->insert([
            'user_id' => 1,
            'point' => 5,
            'comment' => "Work hard",
            'comment_name' => "Nadech Kukimiya",
        ]);

          DB::table('report')->insert([
            'user_id' => 2,
            'point' => 4,
            'comment' => "Good",
            'comment_name' => "Nadech Kukimiya",
        ]);

          DB::table('report')->insert([
            'user_id' => 3,
            'point' => 4,
            'comment' => "Well done",
            'comment_name' => "Nadech Kukimiya",
        ]);

          DB::table('report')->insert([
            'user_id' => 4,
            'point' => 2,
            'comment' => "Sometime lazy",
            'comment_name' => "Nadech Kukimiya",
        ]);

          DB::table('report')->insert([
            'user_id' => 5,
            'point' => 3,
            'comment' => "-",
            'comment_name' => "Jirayu Wongyai",
        ]);

    }
}
