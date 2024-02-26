<?php

namespace Database\Seeders;

use App\Enums\CurrencyStatusEnum;
use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/seeders/csv/codes-all.csv"), 'rb');

        $firstLine = true;
        Currency::truncate();

        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            if (! $firstLine && $data[3]) {
                Currency::create([
                    'name' => $data[1],
                    'country' => $data[0],
                    'alphabetic_code' => $data[2],
                    'numeric_code' => $data[3],
                    'status' => CurrencyStatusEnum::Enable,
                ]);
            }

            $firstLine = false;
        }

        fclose($csvFile);
    }
}
