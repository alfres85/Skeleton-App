<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ActionsTableSeeder extends Seeder
{
    public function run()
    {
        $timestamp = Carbon::now();

        DB::table('actions')->insert([
            [
                'name' => 'Create',
                'description' => 'Permission to create items',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'Delete',
                'description' => 'Permission to delete items',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'Modify',
                'description' => 'Permission to modify items',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'View',
                'description' => 'Permission to view items',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'Access',
                'description' => 'Permission to access items',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'name' => 'Print',
                'description' => 'Permission to print items',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
        ]);
    }
}
