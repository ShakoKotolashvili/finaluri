<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Quiz;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'id' => 5,
            'email' => 'shalva.kotolashvili.1@btu.edu.ge',
            'name' => 'shako',
            'password' => bcrypt('111'),
        ]);

        $quiz = Quiz::create([
            'title' => 'Classical Music Quiz',
            'image' => 'https://en.wikipedia.org/wiki/Classical_period_%28music%29#/media/File:Mozart_family_crop.jpg',
            'description' => 'This quiz is about to check your classical music knowledge',
            'author_id' => 5,
        ]);

        $quiz->question()->createMany([
            [
                
                'title' => 'Who wrote "Ode To Joy"?',
                'image' => 'https://en.wikipedia.org/wiki/Ode_to_Joy#/media/File:Schiller_an_die_freude_manuskript_2.jpg',
                'position' => 1,
                'answer_1' => 'Frederic Chopin',
                'answer_2' => 'Ludwig Van Beethoven',
                'answer_3' => 'Claude Debussy',
                'answer_4' => 'Franz Liszt',
                'correct' => 2,

            ],

            [
                'title' => 'Which composer is on photo?',
                'image' => 'https://en.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart#/media/File:Croce-Mozart-Detail.jpg',
                'position' => 2,
                'answer_1' => 'Johann Sebastian Bach',
                'answer_2' => 'Franz Schubert',
                'answer_3' => 'Wolfgang Amadeus Mozart',
                'answer_4' => 'None of those',
                'correct' => 3,
            ],

            [
                'title' => 'How many symphonies did beethoven write?',
                'image' => 'https://images.immediate.co.uk/production/volatile/sites/24/2020/05/Symphony3_625-c7b20bc.jpg?webp=true&quality=90&resize=525%2C350',
                'position' => 3,
                'answer_1' => '9',
                'answer_2' => '3',
                'answer_3' => '15>',
                'answer_4' => '5',
                'correct' => 1,
            ],

            [
                'title' => 'Which of those following is considered as the best chopin piece?',
                'image' => 'https://en.wikipedia.org/wiki/Frédéric_Chopin#/media/File:Frederic_Chopin_photo.jpeg',
                'position' => 4,
                'answer_1' => 'Fantaisie Impromptu',
                'answer_2' => 'Ballade No.1 in G Minor',
                'answer_3' => 'Etude Op. 25 No. 5 (Wrong Note)',
                'answer_4' => 'Etude Op. 25 No. 11 (Winter Wind)',
                'correct' => 4,
            ],
        ]);

    }
}
