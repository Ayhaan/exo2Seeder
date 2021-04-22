<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompagnieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            [
                "nom" => "compagnie1",
                "adresse" => "Rue zone",
                "postal" => 1070,
                "numero" => 13,
                "email" => "test@test.com",
                "nomcontact" => "nomtest",
                "prenomcontact" => "prenomtest",
                "img" => "test.webp",
                "created_at" => now(),
            ],
            [
                "nom" => "compagnie2",
                "adresse" => "Rue zone",
                "postal" => 1070,
                "numero" => 13,
                "email" => "test@test.com",
                "nomcontact" => "nomtest",
                "prenomcontact" => "prenomtest",
                "img" => "test.webp",
                "created_at" => now(),
            ],
            [
                "nom" => "compagnie3",
                "adresse" => "Rue zone",
                "postal" => 1070,
                "numero" => 13,
                "email" => "test@test.com",
                "nomcontact" => "nomtest",
                "prenomcontact" => "prenomtest",
                "img" => "test.webp",
                "created_at" => now(),
            ],
            [
                "nom" => "compagnie4",
                "adresse" => "Rue zone",
                "postal" => 1070,
                "numero" => 13,
                "email" => "test@test.com",
                "nomcontact" => "nomtest",
                "prenomcontact" => "prenomtest",
                "img" => "test.webp",
                "created_at" => now(),
            ],
        ]);
    }
}
