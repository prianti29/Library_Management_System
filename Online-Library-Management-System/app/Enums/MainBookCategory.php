<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class MainBookCategory extends Enum
{
    const Technology =   0;
    const Science =   1;
    const General = 2;
    const Programming = 3;
}
