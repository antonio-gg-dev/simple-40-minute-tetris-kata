<?php

namespace Tetris;

enum Tetromino: string
{
  case O = <<<TTR
##
##
TTR;
  case L = <<<TTR
# 
# 
##
TTR;
  case T = <<<TTR
 # 
###
TTR;
}