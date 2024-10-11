<?php

namespace Database\Seeders;

use App\Services\CodeService;
use Database\Factories\CodeFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = UserFactory::new()->count(100)->create();

        foreach ($users as $user) {
            $codes = CodeService::generate();
            foreach ($codes as $code) {
                CodeFactory::new()->create([
                    'host_id' => $user->id,
                    'guest_id' => null,
                    'code' => $code,
                ]);
            }
        }
    }
}
