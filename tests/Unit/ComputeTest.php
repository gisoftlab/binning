<?php

namespace Tests\Unit;

use App\Services\ComputeService;
use Tests\TestCase;

class ComputeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
     * @dataProvider provider
     */
    public function test_compute($source, $value)
    {
        $compute = new ComputeService();
        $this->assertEquals($compute->run($source), $value);
    }

    public function provider()
    {
        return array(
            [[ 'value' => '2', 'emojis' => 'Addition', 'value2' => '2'], 4],
            [[ 'value' => '2', 'emojis' => 'Subtraction', 'value2' => '1'], 1],
            [[ 'value' => '2', 'emojis' => 'Multiplication', 'value2' => '2'], 4],
            [[ 'value' => '2', 'emojis' => 'Division', 'value2' => '2'], 1],
            [[ 'value' => '10', 'emojis' => 'Addition', 'value2' => '10'], 20],
            [[ 'value' => '10', 'emojis' => 'Subtraction', 'value2' => '5'], 5],
            [[ 'value' => '20', 'emojis' => 'Multiplication', 'value2' => '1'], 20],
            [[ 'value' => '20', 'emojis' => 'Division', 'value2' => '4'], 5],
            [[ 'value' => '5', 'emojis' => 'Addition', 'value2' => '5'], 10],
            [[ 'value' => '20', 'emojis' => 'Subtraction', 'value2' => '15'], 5],
            [[ 'value' => '4', 'emojis' => 'Multiplication', 'value2' => '4'], 16],
            [[ 'value' => '3', 'emojis' => 'Division', 'value2' => '2'], 1.5],
            [[ 'value' => '50', 'emojis' => 'Addition', 'value2' => '5'], 55],
            [[ 'value' => '223', 'emojis' => 'Subtraction', 'value2' => '15'], 208],
            [[ 'value' => '8', 'emojis' => 'Multiplication', 'value2' => '4'], 32],
            [[ 'value' => '9', 'emojis' => 'Division', 'value2' => '2'], 4.5],
            [[ 'value' => '65', 'emojis' => 'Addition', 'value2' => '55'], 120],
            [[ 'value' => '456', 'emojis' => 'Subtraction', 'value2' => '45'], 411],
            [[ 'value' => '16', 'emojis' => 'Multiplication', 'value2' => '14'], 224],
            [[ 'value' => '0', 'emojis' => 'Division', 'value2' => '2'], 0],
            [[ 'value' => '1265', 'emojis' => 'Addition', 'value2' => '55'], 1320],
            [[ 'value' => '12456', 'emojis' => 'Subtraction', 'value2' => '45'], 12411],
            [[ 'value' => '165', 'emojis' => 'Multiplication', 'value2' => '14'], 2310],
            [[ 'value' => '165', 'emojis' => 'Division', 'value2' => '16'], 10.3125],
        );
    }
}
