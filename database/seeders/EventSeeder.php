<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            "event_name" => "BarNyar BarNyar",
            "event_slug" => "barnyar-barnyar",
            "event_description" => "If you did not attempt to sign in to your account, your password may be compromised. ",
            "event_date" => "1-Jan-2024",
        ]);
    }
}
