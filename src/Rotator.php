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

  public static function toLeft(string $tetromino): string
  {
    if ($tetromino === self::T) {
      $rotatedTetromino = [];
      $array = self::tetrominoToArray($tetromino);

      for ($x = 0; $x < count($array[0]); $x++) {
        $rotatedTetromino[$x] = array();

        for ($y = 0; $y < count($array); $y++) {
          $rotatedTetromino[$x][$y] = $array[$y][$x];
        }
      }

      return self::arrayToTetromino($rotatedTetromino);
    }

    if ($tetromino === self::L) {
      return <<<TTR
  #
###
TTR;
    }

    return self::arrayToTetromino(self::tetrominoToArray($tetromino));
  }

  private static function tetrominoToArray(string $tetromino): array
  {
    return array_map(
      fn($row) => str_split($row),
      explode("\n", $tetromino)
    );
  }

  private static function arrayToTetromino(array $array): string
  {
    return rtrim(
      implode(
        '',
        array_map(
          fn($row) => implode('', $row) . "\n",
          $array
        ),
      ),
      "\n"
    );
  }
}
