<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tetris\Rotator;

class RotatorTest extends TestCase
{
  #[Test]
  public function should_return_o_when_o_given(): void
  {
    $givenO = <<<TTR
##
##
TTR;
    $expectedO = $givenO;

    $this->assertSame($expectedO, Rotator::toLeft($givenO));
  }

  #[Test]
  public function should_rotate_l_to_left(): void
  {
    $givenL = <<<TTR
# 
# 
##
TTR;
    $expectedL = <<<TTR
  #
###
TTR;

    $this->assertSame($expectedL, Rotator::toLeft($givenL));
  }
}