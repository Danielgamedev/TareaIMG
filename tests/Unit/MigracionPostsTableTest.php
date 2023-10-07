<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema; 
use Tests\TestCase;

class MigracionPostsTableTest extends TestCase
{
    use RefreshDatabase; // Usar RefreshDatabase para aplicar y revertir migraciones

    public function setUp(): void
    {
        parent::setUp();

        // Aplicar la migración antes de cada prueba
        $this->artisan('migrate');
    }

    public function tearDown(): void
    {
        // Revertir la migración después de cada prueba
        $this->artisan('migrate:rollback');

        parent::tearDown();
    }

    public function testPostsTableExists()
    {
        // Verificar que la tabla 'posts' existe en la base de datos
        $this->assertTrue(Schema::hasTable('posts'));
    }
}
