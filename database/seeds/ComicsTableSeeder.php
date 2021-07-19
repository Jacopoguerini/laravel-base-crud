<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic) {
            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $slug = $comic['series'] . " " . $comic['title'];
            $newComic->slug = Str::slug($slug, '-');

            $newComic->save();
        }

    }
}
