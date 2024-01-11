<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelatedServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Group 1
        DB::table('related_services')->insert([
            [
                'group_id' => 1,
                'service_id' => 1,
                'related_service_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 1,
                'related_service_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 1,
                'related_service_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 7,
                'related_service_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 7,
                'related_service_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 7,
                'related_service_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 13,
                'related_service_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 13,
                'related_service_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 13,
                'related_service_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 14,
                'related_service_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 14,
                'related_service_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 1,
                'service_id' => 14,
                'related_service_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Group 2
        DB::table('related_services')->insert([
            [
                'group_id' => 2,
                'service_id' => 2,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 2,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 2,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 2,
                'related_service_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 4,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 4,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 4,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 4,
                'related_service_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 5,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 5,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 5,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 5,
                'related_service_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 9,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 9,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 9,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 9,
                'related_service_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 10,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 10,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 10,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 10,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 12,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 12,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 12,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 12,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 16,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 16,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 16,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 16,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 17,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 17,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 17,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 17,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 18,
                'related_service_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 18,
                'related_service_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 18,
                'related_service_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'group_id' => 2,
                'service_id' => 18,
                'related_service_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}