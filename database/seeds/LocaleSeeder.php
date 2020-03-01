<?php

use Illuminate\Database\Seeder;

class LocaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locales = collect([
            [
                'name' => 'Osasco',
                'state' => 'SP',
                'latitude' => '-23.5320',
                'longitude' => '-46.7920'
            ],
            [
                'name' => 'São Paulo',
                'state' => 'SP',
                'latitude' => '-23.5480',
                'longitude' => '-46.6360'
            ]
        ]);

        foreach($locales as $locale) {
            App\Locale::create($locale);
        }
    }
}
