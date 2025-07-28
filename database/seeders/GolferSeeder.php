<?php

namespace Database\Seeders;

use App\Models\Golfer;
use Illuminate\Database\Seeder;

class GolferSeeder extends Seeder
{
    public function run(): void
    {
        // Get the maximum existing debitor_account, or 0 if there is none
        $lastDebitorAccount = Golfer::max('debitor_account') ?? 0;

        for ($i = 1; $i <= 100; $i++) {
            Golfer::factory()->create([
                'debitor_account' => $lastDebitorAccount + $i,
            ]);
        }
    }
}
