<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PenggunaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $response = $this->post('/pengguna', [
            'nama' => 'John Doe',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '1990-10-12',
            'alamat' => 'Jl. Contoh alamat rumah'
        ]);

        $response->assertStatus(200);
    }
}
