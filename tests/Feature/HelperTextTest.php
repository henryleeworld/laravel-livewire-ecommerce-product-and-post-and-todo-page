<?php

namespace Tests\Feature;

use App\Livewire\ShowHelp;
use Livewire\Livewire;
use Tests\TestCase;

class HelperTextTest extends TestCase
{
    public function test_can_see_helper_text()
    {
        Livewire::test(ShowHelp::class)
            ->assertDontSee('Lorem Ipsum')
            ->toggle('showHelp')
            ->assertSee('Lorem Ipsum');
    }
}
