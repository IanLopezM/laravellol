<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Champion;

class ChampionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
           $table->id();
            $table->string('name');
            $table->string('title');
            $table->text('blurb');
            $table->string('attack');
            $table->string('defense');
            $table->string('magic');
            $table->string('difficulty');
            $table->string('miniature');
            $table->string('image');
            $table->foreignId('category_id');
            $table->timestamps();
         */

        $text = file_get_contents("http://enginedilema.com/champion.json");
        $json = json_decode($text);

        foreach ($json->data as $champion) {
            Champion::create([
                'name' => $champion->name,
                'title' => $champion->title,
                'blurb' => $champion->blurb,
                'miniature' => "http://ddragon.leagueoflegends.com/cdn/12.2.1/img/champion/".$champion->id.".png",
                'image' => "http://ddragon.leagueoflegends.com/cdn/img/champion/loading/".$champion->id."_0.jpg",
            ]);
        }
    }
}
