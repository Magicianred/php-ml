<?php

declare(strict_types=1);

namespace Phpml\Tests\NeuralNetwork\ActivationFunction;

use Phpml\NeuralNetwork\ActivationFunction\Gaussian;
use PHPUnit\Framework\TestCase;

class GaussianTest extends TestCase
{
    /**
     * @dataProvider gaussianProvider
     */
    public function testGaussianActivationFunction($expected, $value): void
    {
        $gaussian = new Gaussian();

        $this->assertEquals($expected, $gaussian->compute($value), '', 0.001);
    }

    public function gaussianProvider(): array
    {
        return [
            [0.367, 1],
            [1, 0],
            [0.367, -1],
            [0, 3],
            [0, -3],
        ];
    }
}
