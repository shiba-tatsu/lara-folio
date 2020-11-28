<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Contact;
use Faker\Generator as Faker;

class ContactControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function testConfirm(){

        $this->withoutExceptionHandling();
        $response = $this->post(route('contacts.confirm'));

        $response->assertStatus(200)
            ->assertViewIs('contacts.confirm');
    }
    
}
