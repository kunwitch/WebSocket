<?php
/**
 * Tests for WebSocket
 */

use PHPUnit\Framework\TestCase;
use Websocket\Websocket;

class WebsocketTest extends TestCase {
    private Websocket $instance;

    protected function setUp(): void {
        $this->instance = new Websocket(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Websocket::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
