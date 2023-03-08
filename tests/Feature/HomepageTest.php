<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepageTest extends TestCase
{
  public function test_visit_homepage(): void
  {
    $response = $this->get('/');
    $response->assertSeeText('Hi, Ingin Meminjam Fasilitas?');

    $response->assertStatus(200);
  }
}
