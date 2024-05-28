<?php

namespace Tests\Unit\Calc;

use App\Helpers\Helpers;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    public function test_sum(): void
    {
        // $this->assertTrue(true);
        $helpers = new Helpers();
        $sum = $helpers->sum(5, 6);
        $this->assertEquals(11, $sum);
    }

    // BAD CALL NOT SUPPORTED IN FUTURE
    /** @test */
    public function mul(): void
    {
        // $this->assertTrue(true);
        $helpers = new Helpers();
        $mul = $helpers->mul(5, 6);
        $this->assertEquals(30, $mul);
    }
}
