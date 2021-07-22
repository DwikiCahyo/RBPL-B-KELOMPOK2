<?php

namespace Tests\Feature;

use App\Models\Resep;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResepTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     //test untuk menambah resep
    /** @test */
    public function tambah_data_pada_resep()
    {
        $response = $this->get('/');
        Resep::factory()->create([
            'NamaResep' => 'Bubur Kacang Ijo',
            'DeskripsiResep' => 'Merupakan Salah Satu olahan dari biji kacang hijau',
            'Bahan' => 'Kacang Hijau',
            'LangkahLangkah' => 'Rendam Kacang Hijau selama 10 menit',
            'Rasa' => 'manis',
            'WaktuMakan' => 'pagi'
        ]);
        $response->assertStatus(200);
    }
}
