<?php

declare(strict_types=1);

namespace Tetris;

class Rotator
{
  public static function toLeft(string $tetromino): string
  {
    $rotatedTetromino = [];
    $array = self::tetrominoToArray($tetromino);

    for ($x = 0; $x < count($array[0]); $x++) {
      $rotatedTetromino[$x] = array();

      for ($y = 0; $y < count($array); $y++) {
        $rotatedTetromino[$x][$y] = $array[$y][count($array[0]) - $x - 1];
      }
    }

    return self::arrayToTetromino($rotatedTetromino);
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
