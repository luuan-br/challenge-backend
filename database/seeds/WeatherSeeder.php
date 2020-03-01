<?php

use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weathers = collect([
            [
                'date' => '2017-02-01',
                'text' => 'Sol com muitas nuvens durante o dia. Períodos de nublado, com chuva a qualquer hora.',
                'temperature_min' => '20',
                'temperature_max' => '28',
                'rain_probability' => '60',
                'rain_precipitation' => '20',
                'locale_id' => '1'
            ],
            [
                'date' => '2017-02-02',
                'text' => 'Sol com muitas nuvens durante o dia. Períodos de nublado, com chuva a qualquer hora.',
                'temperature_min' => '21',
                'temperature_max' => '30',
                'rain_probability' => '60',
                'rain_precipitation' => '10',
                'locale_id' => '1'
            ],
            [
                'date' => '2017-02-03',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '22',
                'temperature_max' => '31',
                'rain_probability' => '60',
                'rain_precipitation' => '15',
                'locale_id' => '1'
            ],
            [
                'date' => '2017-02-04',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '22',
                'temperature_max' => '32',
                'rain_probability' => '60',
                'rain_precipitation' => '16',
                'locale_id' => '1'
            ],
            [
                'date' => '2017-02-05',
                'text' => 'Sol e aumento de nuvens de manhã. Pancadas de chuva à tarde e à noite.',
                'temperature_min' => '23',
                'temperature_max' => '32',
                'rain_probability' => '67',
                'rain_precipitation' => '19',
                'locale_id' => '1'
            ],
            [
                'date' => '2017-02-06',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '22',
                'temperature_max' => '33',
                'rain_probability' => '60',
                'rain_precipitation' => '8',
                'locale_id' => '1'
            ],
            [
                'date' => '2017-02-07',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '25',
                'temperature_max' => '30',
                'rain_probability' => '60',
                'rain_precipitation' => '11',
                'locale_id' => '1'
            ],
            [
                'date' => '2017-02-01',
                'text' => 'Sol com muitas nuvens durante o dia. Períodos de nublado, com chuva a qualquer hora.',
                'temperature_min' => '19',
                'temperature_max' => '27',
                'rain_probability' => '60',
                'rain_precipitation' => '20',
                'locale_id' => '2'
            ],
            [
                'date' => '2017-02-02',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '20',
                'temperature_max' => '29',
                'rain_probability' => '60',
                'rain_precipitation' => '15',
                'locale_id' => '2'
            ],
            [
                'date' => '2017-02-03',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '21',
                'temperature_max' => '30',
                'rain_probability' => '60',
                'rain_precipitation' => '15',
                'locale_id' => '2'
            ],
            [
                'date' => '2017-02-04',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '21',
                'temperature_max' => '31',
                'rain_probability' => '60',
                'rain_precipitation' => '11',
                'locale_id' => '2'
            ],
            [
                'date' => '2017-02-05',
                'text' => 'Sol e aumento de nuvens de manhã. Pancadas de chuva à tarde e à noite.',
                'temperature_min' => '22',
                'temperature_max' => '31',
                'rain_probability' => '67',
                'rain_precipitation' => '16',
                'locale_id' => '2'
            ],
            [
                'date' => '2017-02-06',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '21',
                'temperature_max' => '32',
                'rain_probability' => '60',
                'rain_precipitation' => '8',
                'locale_id' => '2'
            ],
            [
                'date' => '2017-02-07',
                'text' => 'Sol com algumas nuvens. Chove rápido durante o dia e à noite.',
                'temperature_min' => '22',
                'temperature_max' => '33',
                'rain_probability' => '60',
                'rain_precipitation' => '26',
                'locale_id' => '2'
            ],
        ]);

        foreach($weathers as $weather) {
            App\Weather::create($weather);
        }
    }
}
