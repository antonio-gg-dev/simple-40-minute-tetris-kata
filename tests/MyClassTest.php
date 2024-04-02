<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tetris\MyClass;

class MyClassTest extends TestCase
{
  #[Test]
  public function write_your_test_here(): void
  {
    $this->assertTrue(MyClass::myMethod());
  }

}
