<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tetris\Rotator;
use Tetris\Tetromino;

class RotatorTest extends TestCase
{
  #[Test]
  public function should_return_o_when_o_given(): void
  {
    $givenO = Tetromino::O->value;
    $expectedO = $givenO;

    $this->assertSame($expectedO, Rotator::toLeft($givenO));
  }

  #[Test]
  public function should_rotate_l_to_left(): void
  {
    $givenL = Tetromino::L->value;
    $expectedL = <<<TTR
  #
###
TTR;

    $this->assertSame($expectedL, Rotator::toLeft($givenL));
  }

  #[Test]
  public function should_rotate_t_to_left(): void
  {
    $givenT = Tetromino::T->value;
    $expectedT = <<<TTR
 #
##
 #
TTR;

    $this->assertSame($expectedT, Rotator::toLeft($givenT));
  }
}
