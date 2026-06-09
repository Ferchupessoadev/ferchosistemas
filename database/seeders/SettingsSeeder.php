<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::set('instagram', 'https://www.instagram.com/ferchotech.ok');
        Setting::set('linkedin', 'https://www.linkedin.com/in/ferchupessoadev');
        Setting::set('github', 'https://github.com/Ferchupessoadev');
    }
}
