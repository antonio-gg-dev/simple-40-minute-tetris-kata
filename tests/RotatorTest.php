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
  public function should_rotate_to_left(string $given, string $expected): void
  {
    $this->assertSame($expected, Rotator::toLeft($given));
  }

  public static function tetrominoToLeftProvider (): Generator
  {
    yield 'I' => [Tetromino::I->value, '####'];

    yield 'O' => [Tetromino::O->value, Tetromino::O->value];

    yield 'T' => [Tetromino::T->value, <<<TTR
# 
##
# 
TTR
    ];

    yield 'J' => [Tetromino::J->value, <<<TTR
###
  #
TTR
    ];

    yield 'L' => [Tetromino::L->value, <<<TTR
  #
###
TTR
    ];

    yield 'S' => [Tetromino::S->value, <<<TTR
# 
##
 #
TTR
    ];

    yield 'Z' => [Tetromino::Z->value, <<<TTR
 #
##
# 
TTR
    ];
  }

  #[Test]
  #[DataProvider('tetrominoToLeftProvider')]
  public function should_rotate_to_left_twice(string $given, string $expected): void
  {
    $this->assertSame($expected, Rotator::toLeft($given));
  }

  public static function tetrominoToLeftTwiceProvider (): Generator
  {
    yield 'I' => [Tetromino::I->value, Tetromino::I->value];

    yield 'O' => [Tetromino::O->value, Tetromino::O->value];

    yield 'T' => [Tetromino::T->value, <<<TTR
 # 
###
TTR
    ];

    yield 'J' => [Tetromino::J->value, Tetromino::J->value];

    yield 'L' => [Tetromino::L->value, Tetromino::L->value];

    yield 'S' => [Tetromino::S->value, Tetromino::S->value];

    yield 'Z' => [Tetromino::Z->value, Tetromino::Z->value];
  }

  #[Test]
  #[DataProvider('tetrominoToRightProvider')]
  public function should_rotate_to_right(string $given, string $expected): void
  {
    $this->assertSame($expected, Rotator::toRight($given));
  }

  public static function tetrominoToRightProvider (): Generator
  {
    yield 'I' => [Tetromino::I->value, '####'];

    yield 'O' => [Tetromino::O->value, Tetromino::O->value];

    yield 'T' => [Tetromino::T->value, <<<TTR
 #
##
 #
TTR
    ];

    yield 'J' => [Tetromino::J->value, <<<TTR
#  
###
TTR
    ];

    yield 'L' => [Tetromino::L->value, <<<TTR
###
#  
TTR
    ];

    yield 'S' => [Tetromino::S->value, <<<TTR
# 
##
 #
TTR
    ];

    yield 'Z' => [Tetromino::Z->value, <<<TTR
 #
##
# 
TTR
    ];
  }
}
