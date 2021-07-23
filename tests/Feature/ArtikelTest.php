<?php
//Ramadhani Galuh Candra Purtiwi (05211940000037)
//Ika Rahma Andhani (05211940000044)
namespace Tests\Feature;

use App\Models\Artikel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArtikelTest extends TestCase
{
    /** @test */
    public function menambah_artikel()
    {
        $response = $this->get('/');
        Artikel::factory()->create([
            'JudulArtikel' => 'Manfaat Tomat untuk kesehatan',
            'DeskripsiArtikel' => 'Tomat merupakan salah satu sayuran yang kaya akan nutrisi'

        ]);
        $response->assertStatus(200);
    }
    /** @test */
    public function menampilkan_list_artikel()
    {
        $this->get(route('listArtikel'));
        $this->assertTrue(true);
    }
    /** @test */
    public function menampilkan_list_artikel_admin()
    {
        $this->get(route('listArtikelAdmin'));
        $this->assertTrue(true);
    }
    /** @test */
    public function menghapus_artikel()
     {
        $response = $this->get('/');
       $tempats=Artikel::factory()->create([
        'JudulArtikel' => 'Manfaat Mangga untuk kesehatan',
        'DeskripsiArtikel' => 'Mangga merupakan salah satu buah yang kaya akan nutrisi'

        ]);

        $this->assertDatabaseHas('artikels',[
            'JudulArtikel' => 'Manfaat Mangga untuk kesehatan',
            'DeskripsiArtikel' => 'Mangga merupakan salah satu buah yang kaya akan nutrisi'

        ]);
        $this->get(route('listArtikelAdmin'));

        $delete_tempat = Artikel::destroy($tempats->id);

        $this->assertTrue(true);
     
    }
}
