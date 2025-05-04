<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Проверяем, не существует ли уже администратор
        if (!User::where('email', 'admin@autoschool.ru')->exists()) {
            User::create([
                'name' => 'Администратор',
                'email' => 'admin@autoschool.ru',
                'email_verified_at' => now(),
                'password' => Hash::make('123123'), // Надежный пароль
                'remember_token' => Str::random(10),
            ]);
            
            $this->command->info('Администратор успешно создан!');
            $this->command->info('Email: admin@autoschool.ru');
            $this->command->info('Пароль: SecurePassword123!');
        } else {
            $this->command->info('Администратор уже существует в системе.');
        }
    }
}