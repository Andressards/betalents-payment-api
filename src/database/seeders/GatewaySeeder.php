<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gateway;

class GatewaySeeder extends Seeder
{
    public function run()
    {
        Gateway::create([
            'name' => 'Gateway1',
            'priority' => 1,
            'is_active' => true
        ]);

        Gateway::create([
            'name' => 'Gateway2',
            'priority' => 2,
            'is_active' => true
        ]);
    }
}
