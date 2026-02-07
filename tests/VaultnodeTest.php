<?php
/**
 * Tests for VaultNode
 */

use PHPUnit\Framework\TestCase;
use Vaultnode\Vaultnode;

class VaultnodeTest extends TestCase {
    private Vaultnode $instance;

    protected function setUp(): void {
        $this->instance = new Vaultnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vaultnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
