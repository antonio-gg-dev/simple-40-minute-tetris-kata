<?php

declare(strict_types=1);

namespace Tetris;

class Rotator
{
  private const L = <<<TTR
# 
# 
##
TTR;
  private const T = <<<TTR
 # 
###
TTR;

  public static function toLeft(string $tetromino): string {
    if ($tetromino === self::T) {
      return <<<TTR
 #
##
 #
TTR;
    }

    if ($tetromino === self::L) {
      return <<<TTR
  #
###
TTR;
    }

    return <<<TTR
##
##
TTR;
  }
}
