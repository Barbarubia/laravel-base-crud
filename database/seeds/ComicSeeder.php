<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrComics = config('comics');

        foreach($arrComics as $comic) {
            Comic::create($comic);
        }
    }
}
