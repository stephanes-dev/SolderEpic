<?php
/**
 * Tests for SolderEpic
 */

use PHPUnit\Framework\TestCase;
use Solderepic\Solderepic;

class SolderepicTest extends TestCase {
    private Solderepic $instance;

    protected function setUp(): void {
        $this->instance = new Solderepic(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solderepic::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
