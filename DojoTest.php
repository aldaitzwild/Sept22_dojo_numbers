<?php
use PHPUnit\Framework\TestCase;

include 'code.php';

final class DojoTest extends TestCase {

    public function testCanBeUsedAsString(): void {

        $res = transform(1, 9);
        $this->assertEquals(
            '1-2-3-4-5-6-7-8-9',
            $res
        );

        $res = transform(3, 6);
        $this->assertEquals(
            '3-4-5-6',
            $res
        );

        $res = transform(8, 9);
        $this->assertEquals(
            '8-9',
            $res
        );
    }

    public function testNegativeValues(): void {

        $res = transform(-1, 9);
        $this->assertEquals(
            'Les paramètres doivent etre positifs',
            $res
        );

        $res = transform(3, -6);
        $this->assertEquals(
            'Les paramètres doivent etre positifs',
            $res
        );
    }

    public function testIfStartIsSmallerThanEnd(): void {

        $res = transform(8, 2);
        $this->assertEquals(
            'La fin doit est supérieur au début',
            $res
        );
    }

    public function testEndIsSmallerThan10(): void {

        $res = transform(8, 10);
        $this->assertEquals(
            'La fin ne peut pas dépasser 9',
            $res
        );
    }
}
