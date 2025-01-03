<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('series')->insert([
            [
                'title' => 'Breaking Bad',
                'description' => 'A chemistry teacher turned meth manufacturer struggles with the criminal world.',
                'release_date' => '2008-01-20',
                'seasons' => 5,
                'episodes' => 62,
                'rating' => 9.5,
                'genre_id' => 3, // Drama
                'image_path' => '../public/images/series/breaking_bad.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Friends',
                'description' => 'A sitcom about six friends living in New York City.',
                'release_date' => '1994-09-22',
                'seasons' => 10,
                'episodes' => 236,
                'rating' => 8.8,
                'genre_id' => 2, // Comedy
                'image_path' => '../public/images/series/friends.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Stranger Things',
                'description' => 'A group of kids in a small town face mysterious and supernatural events.',
                'release_date' => '2016-07-15',
                'seasons' => 4,
                'episodes' => 34,
                'rating' => 8.7,
                'genre_id' => 3, // Sci-Fi
                'image_path' => '../public/images/series/stranger_things.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Office',
                'description' => 'A mockumentary about the everyday lives of office employees working at Dunder Mifflin.',
                'release_date' => '2005-03-24',
                'seasons' => 9,
                'episodes' => 201,
                'rating' => 8.9,
                'genre_id' => 2, // Comedy
                'image_path' => '../public/images/series/the_office.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Walking Dead',
                'description' => 'A group of survivors navigate a post-apocalyptic world overrun by zombies.',
                'release_date' => '2010-10-31',
                'seasons' => 11,
                'episodes' => 177,
                'rating' => 8.1,
                'genre_id' => 5, // Horror
                'image_path' => '../public/images/series/the_walking_dead.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Crown',
                'description' => 'A historical drama about the reign of Queen Elizabeth II.',
                'release_date' => '2016-11-04',
                'seasons' => 6,
                'episodes' => 60,
                'rating' => 8.7,
                'genre_id' => 3, // Drama
                'image_path' => '../public/images/series/the_crown.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Game of Thrones',
                'description' => 'Noble families vie for control of the Iron Throne in a medieval fantasy world.',
                'release_date' => '2011-04-17',
                'seasons' => 8,
                'episodes' => 73,
                'rating' => 9.3,
                'genre_id' => 7, // Fantasy
                'image_path' => '../public/images/series/game_of_thrones.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'From',
                'description' => '"From" is a horror-mystery series about people trapped in a town with terrifying creatures and dark secrets.',
                'release_date' => '2022-02-20',
                'seasons' => 3,
                'episodes' => 30,
                'rating' => 9.3,
                'genre_id' => 5, // Horror
                'image_path' => '../public/images/series/from.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
