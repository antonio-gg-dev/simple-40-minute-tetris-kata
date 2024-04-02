<?php

declare(strict_types=1);

namespace Tests;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tetris\Rotator;
use Tetris\Tetromino;

class RotatorTest extends TestCase
{
  #[Test]
  #[DataProvider('tetrominoToLeftProvider')]
  public function should_rotate_to_left(Tetromino $given, string $expected): void
  {
    $this->assertSame($expected, Rotator::toLeft($given->value));
  }

  public static function tetrominoToLeftProvider (): Generator
  {
    yield 'I' => [Tetromino::I, <<<TTR
####
TTR
    ];

    yield 'O' => [Tetromino::O, <<<TTR
##
##
TTR
    ];

    yield 'T' => [Tetromino::T, <<<TTR
# 
##
# 
TTR
    ];

    yield 'J' => [Tetromino::J, <<<TTR
###
  #
TTR
    ];

    yield 'L' => [Tetromino::L, <<<TTR
  #
###
TTR
    ];

    yield 'S' => [Tetromino::S, <<<TTR
# 
##
 #
TTR
    ];

    yield 'Z' => [Tetromino::Z, <<<TTR
 #
##
# 
TTR
    ];
  }
}
