<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_that_add_is_true(){
        $result=2+2;
        
        $this->assertEquals(4,$result);
    }
    
    public function testFailure(): void
    {
        $this->assertSame('2204', 2204);
    }

}
