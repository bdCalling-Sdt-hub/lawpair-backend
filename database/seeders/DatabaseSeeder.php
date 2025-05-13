<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $avatars = collect(glob(public_path('img/*.*')))->random(); // Random single image from public/img folder
        User::create([
            'first_name' => 'Law',
            'last_name' => 'Pair',
            'phone' => '01700000000',
            'email' => 'lawpair@gmail.com',
            'email_verified_at' =>  now(),
            'avatar' => Storage::putFile('uploads/avatars', $avatars),
            'password' => Hash::make('LawPair123'), //
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // $this->call(UserSeeder::class);
    }
}
