<?php
use App\class\Evenement;
use PHPUnit\Framework\TestCase;

class TestEvenement extends TestCase
{
    public function testAll(): void
    {
        $unEvenement = new Evenement(new DateTime("00:08:00"));
        $this->assertEquals("00:08:00", $unEvenement->getTemps()->format("H:i:s"));
    }

    public function testException(): void
    {
        $this->expectException(\Exception::class);
        $unEvenement = new Evenement(new DateTime("1:31:00"));
    }
}