<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageControllerTest extends TestCase
{
            /** @test */
public function it_stores_an_image()
{
    // Simula una imagen de prueba (puedes crear un archivo de prueba en tu sistema)
    $image = UploadedFile::fake()->image('test_image.jpg');

    $response = $this->post('/images/store', [
        'image' => $image,
    ]);

    // Verifica que la imagen se haya almacenado correctamente
    $this->assertFileExists(storage_path('app/public/images/test_image.jpg'));

    // Verifica la respuesta HTTP (puedes personalizar esto según tu aplicación)
    $response->assertStatus(302); // Redirección exitosa
}
}
