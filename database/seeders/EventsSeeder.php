<?php
namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    public function run(): void
    {
        Event::insert([
            ['name'=>'Donor Darah','date'=>'2025-11-12','location'=>'Auditorium','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Festival Budaya','date'=>'2025-10-20','location'=>'Gedung Serbaguna Yayasan Del','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Del Art Competition','date'=>'2025-12-05','location'=>'Kontainer Koperasi IT Del','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}