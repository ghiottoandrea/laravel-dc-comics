<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comics;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comic.comic');

        foreach ($comics as $comic) {
            $newComic = new Comics();
            $newComic->title = $comic['title'];
            $newComic->thumb = $comic['thumb'];
            $newComic->description = $comic['description'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->type = $comic['type'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->save();
        }
    }
}
