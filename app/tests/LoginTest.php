<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoadView()
    {
        $this->visit('auth/login')
                ->see('BIENVENIDO')
                ->see('2015. TODOS LOS DERECHOS RESERVADOS');

        $this->assertResponseOk();
    }

    public function testAjaxOk()
    {
        $this->post('auth/verify', ['user' => 'admin', 'password' => '12345678'])
                ->see('ok');
    }

    public function testAjaxError()
    {
        $this->post('auth/verify', ['user' => 'nohay', 'password' => 'abcdefghijklm'])
                ->see('error');
    }
}
