<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoadView()
    {
        $this->visit('/')
                ->see('ACERCA DE')
                ->see('SERVICIOS')
                ->see('NOTICIAS')
                ->see('Locales')
                ->see('CONTACTO');

        $this->assertViewHas('categories');
        $this->assertViewHas('newsclass');
        $this->assertViewHas('events');
    }
}
