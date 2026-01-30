<?php
/**
 * Tests for AIBootcamp
 */

use PHPUnit\Framework\TestCase;
use Aibootcamp\Aibootcamp;

class AibootcampTest extends TestCase {
    private Aibootcamp $instance;

    protected function setUp(): void {
        $this->instance = new Aibootcamp(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Aibootcamp::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
