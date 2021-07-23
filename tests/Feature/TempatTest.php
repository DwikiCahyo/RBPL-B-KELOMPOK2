<?php
//Alfado Rafly Hermawan(05211940000090)
//lacsita Devi Oktaviana(0521194000037)
namespace Tests\Feature;

use App\Models\Tempat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TempatTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     /** @test */
     public function menambah_tempat()
     {
         $response = $this->get('/');
         Tempat::factory()->create([
             'NamaTempat' => 'Pasar Baru',
             'DeskripsiTempat' => 'Merupakan Salah Satu Pasar yang menjadi pusat perbelanjaan',
             'Kota' => 'Madiun',
             'Kecamatan' => 'Taman',
             'LokasiTempat' => 'Jl.urip sumoharjo no.5',
             'JenisKategori' => 'pasar'
         ]);
         $response->assertStatus(200);

     }
     /** @test */
     public function menampilkan_list_pada_tempat()
     {
         $this->get(route('listtempat'));
         $this->assertTrue(true);
     }


      /** @test */
      public function menampilkan_list_pada_tempat_admin()
      {
          $this->get(route('listtempatadmin'));
          $this->assertTrue(true);
      }

      /** @test */
      public function menghapus_tempat()
      {
         $response = $this->get('/');
        $tempats=Tempat::factory()->create([
             'NamaTempat' => 'Pasar Templek',
             'DeskripsiTempat' => 'Merupakan Salah Satu Pasar yang menjadi pusat perbelanjaan',
             'Kota' => 'Madiun',
             'Kecamatan' => 'Manguharjo',
             'LokasiTempat' => 'Jl.pahlawan no.5',
             'JenisKategori' => 'pasar'
         ]);

         $this->assertDatabaseHas('tempats',[
             'NamaTempat' => 'Pasar Templek',
             'DeskripsiTempat' => 'Merupakan Salah Satu Pasar yang menjadi pusat perbelanjaan',
             'Kota' => 'Madiun',
             'Kecamatan' => 'Manguharjo',
             'LokasiTempat' => 'Jl.pahlawan no.5',
             'JenisKategori' => 'pasar'


         ]);
         $this->get(route('listtempatadmin'));

         $delete_tempat = Tempat::destroy($tempats->id);

         $this->assertTrue(true);
      }
}
