<?php

declare(strict_types=1);

namespace Tetris;

enum Tetromino: string
{
  case I = <<<TTR
#
#
#
#
TTR;

  case O = <<<TTR
##
##
TTR;

  case T = <<<TTR
###
 # 
TTR;

  case J = <<<TTR
 #
 #
##
TTR;

  case L = <<<TTR
# 
# 
##
TTR;

  case S = <<<TTR
 ##
## 
TTR;

  case Z = <<<TTR
## 
 ##
TTR;
}