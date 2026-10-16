<?php
/**
 * Tests for DraftScribe
 */

use PHPUnit\Framework\TestCase;
use Draftscribe\Draftscribe;

class DraftscribeTest extends TestCase {
    private Draftscribe $instance;

    protected function setUp(): void {
        $this->instance = new Draftscribe(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftscribe::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
