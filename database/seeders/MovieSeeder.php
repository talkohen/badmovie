<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'The Menu', 'heb_name'=> 'התפריט', 'imdb'=> 'https://www.imdb.com/title/tt9764362', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2023', '01', '18')],
            ['title' => 'Nope', 'heb_name'=> 'אין מצב', 'imdb'=> 'https://www.imdb.com/title/tt10954984', 'rotten_tomatoes' => '', 'image' => '','watched' => Carbon::create('2023', '02', '08')],
            ['title' => 'The Room', 'heb_name'=> 'החדר', 'imdb'=> 'https://www.imdb.com/title/tt0368226', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2023', '03', '07')],
            ['title' => 'The Hot Chick', 'heb_name'=> 'חתיכה לוהטת', 'imdb'=> 'https://www.imdb.com/title/tt0302640', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2024', '01', '30')],
            ['title' => 'Bad Trip', 'heb_name'=> 'באד טריפ', 'imdb'=> 'https://www.imdb.com/title/tt9684220', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2024', '03', '24')],
            ['title' => 'Ole LaRosh', 'heb_name'=> 'עולה לראש', 'imdb'=> 'https://www.imdb.com/title/tt21158522', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2024', '04', '23')],
            ['title' => 'The Unbearable Weight of Massive Talent', 'heb_name'=> 'משקלו הבלתי נסבל של כשרון ענק', 'rotten_tomatoes' => '', 'image' => '', 'imdb'=> 'https://www.imdb.com/title/tt11291274','watched' => Carbon::create('2024', '05', '20')],
            ['title' => 'Jackass Forever', 'heb_name'=> 'גקאס לנצח', 'imdb'=> 'https://www.imdb.com/title/tt11466222', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2024', '07', '07')],
            ['title' => 'Bad Boys for Life', 'heb_name'=> 'בחורים רעים לנצח', 'imdb'=> 'https://www.imdb.com/title/tt1502397', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2024', '10', '17')],
            ['title' => 'Joker: Folie à Deux', 'heb_name'=> 'גוקר 2', 'imdb'=> 'https://www.imdb.com/title/tt11315808', 'rotten_tomatoes' => '', 'image' => '', 'watched' => Carbon::create('2025', '01', '26')],
        ];

        foreach ($data as $item) {
            Movie::create($item);
        }
    }
}
