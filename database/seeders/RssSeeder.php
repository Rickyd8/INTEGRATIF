<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            'name' => 'football',
            'url' => "https://www.football.london/arsenal-fc/?service=rss"
            //'name' => 'korea',
            //'url' => "http://www.koreatimes.co.kr/www/rss/tech.xml"
            //'name' => 'motor',
            //'url' => "https://www.motor1.com/rss/category/manufacturing-production/" 
        ]);
    }
}