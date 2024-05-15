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
            $newcomic = new Comics();
            $newcomic->title = $comic['title'];
            $newcomic->thumb = $comic['thumb'];
            $newcomic->description = $comic['description'];
            $newcomic->price = $comic['price'];
            $newcomic->series = $comic['series'];
            $newcomic->type = $comic['type'];
            $newcomic->sale_date = $comic['sale_date'];
            $newcomic->save();
        }
    }
}
