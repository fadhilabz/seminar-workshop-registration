<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Payment;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure sample users exist
        $usersData = [
            ['name' => 'Adit Sopo', 'email' => 'adit.s@gmail.com', 'password' => bcrypt('password')],
            ['name' => 'Budi Nugraha', 'email' => 'budi.nug@outlook.com', 'password' => bcrypt('password')],
            ['name' => 'Citra Rahayu', 'email' => 'citra.rah@gmail.com', 'password' => bcrypt('password')],
            ['name' => 'Dian Anggraini', 'email' => 'dian_a@yahoo.com', 'password' => bcrypt('password')],
            ['name' => 'Eko Kurniawan', 'email' => 'eko.kurn@gmail.com', 'password' => bcrypt('password')],
        ];

        $users = [];
        foreach ($usersData as $u) {
            $users[] = User::firstOrCreate(['email' => $u['email']], $u);
        }

        $events = Event::all();
        if ($events->isEmpty()) {
            return;
        }

        $paymentsSample = [
            [
                'user' => $users[0],
                'event' => $events[0] ?? $events->random(),
                'status' => 'pending',
                'proof' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
            ],
            [
                'user' => $users[1],
                'event' => $events[1] ?? $events->random(),
                'status' => 'pending',
                'proof' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
            ],
            [
                'user' => $users[2],
                'event' => $events[2] ?? $events->random(),
                'status' => 'pending',
                'proof' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
            ],
            [
                'user' => $users[3],
                'event' => $events[3] ?? $events->random(),
                'status' => 'confirmed',
                'proof' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
            ],
            [
                'user' => $users[4],
                'event' => $events[4] ?? $events->random(),
                'status' => 'rejected',
                'proof' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
            ],
        ];

        foreach ($paymentsSample as $sample) {
            $registration = Registration::firstOrCreate(
                [
                    'user_id' => $sample['user']->id,
                    'event_id' => $sample['event']->id,
                ],
                [
                    'status' => $sample['status'] === 'confirmed' ? 'confirmed' : 'pending',
                    'registered_at' => now(),
                ]
            );

            Payment::updateOrCreate(
                ['registration_id' => $registration->id],
                [
                    'proof_image' => $sample['proof'],
                    'status' => $sample['status'],
                    'verified_at' => $sample['status'] === 'confirmed' ? now() : null,
                ]
            );
        }
    }
}
