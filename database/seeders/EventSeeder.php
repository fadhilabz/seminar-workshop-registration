<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Strategi Transformasi Digital UMKM 2024',
                'slug' => 'strategi-transformasi-digital-umkm-2024',
                'type' => 'Seminar',
                'date' => '2024-10-24 09:00:00',
                'location' => 'Hotel Indonesia, Jakarta',
                'price' => 250000,
                'quota' => 100,
                'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Masterclass UI/UX Design: Dari Riset ke Prototipe',
                'slug' => 'masterclass-ui-ux-design-dari-riset-ke-prototipe',
                'type' => 'Workshop',
                'date' => '2024-10-28 13:00:00',
                'location' => 'Online via Zoom',
                'price' => 150000,
                'quota' => 50,
                'image' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Inovasi Teknologi Kesehatan Masa Depan',
                'slug' => 'inovasi-teknologi-kesehatan-masa-depan',
                'type' => 'Seminar',
                'date' => '2024-11-02 09:00:00',
                'location' => 'Gedung Graha Medika, Bandung',
                'price' => null,
                'quota' => 150,
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Manajemen Keuangan Bisnis bagi Pemula',
                'slug' => 'manajemen-keuangan-bisnis-bagi-pemula',
                'type' => 'Workshop',
                'date' => '2024-11-10 10:00:00',
                'location' => 'Creative Space, Surabaya',
                'price' => 500000,
                'quota' => 40,
                'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Kecerdasan Buatan dalam Industri Kreatif',
                'slug' => 'kecerdasan-buatan-dalam-industri-kreatif',
                'type' => 'Seminar',
                'date' => '2024-11-15 14:00:00',
                'location' => 'Online Webinar',
                'price' => 75000,
                'quota' => 200,
                'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=800',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Teknik Penulisan Jurnal Ilmiah Internasional',
                'slug' => 'teknik-penulisan-jurnal-ilmiah-internasional',
                'type' => 'Workshop',
                'date' => '2024-11-20 08:30:00',
                'location' => 'Auditorium Pusat, Yogyakarta',
                'price' => 350000,
                'quota' => 60,
                'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?w=800',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Cybersecurity Essentials for Modern Enterprises',
                'slug' => 'cybersecurity-essentials-for-modern-enterprises',
                'type' => 'Seminar',
                'date' => '2024-11-25 09:30:00',
                'location' => 'Grand Ballroom Hotel Mulia, Jakarta',
                'price' => 200000,
                'quota' => 80,
                'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Fullstack Web Development with Laravel & Vue',
                'slug' => 'fullstack-web-development-with-laravel-vue',
                'type' => 'Workshop',
                'date' => '2024-12-01 10:00:00',
                'location' => 'Online via Google Meet',
                'price' => null,
                'quota' => 120,
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800',
                'status' => 'upcoming',
            ],
        ];

        foreach ($events as $eventData) {
            Event::updateOrCreate(
                ['slug' => $eventData['slug']],
                $eventData
            );
        }
    }
}
