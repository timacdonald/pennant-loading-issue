<?php

namespace App\Features;

use Illuminate\Support\Lottery;

class YetAnotherFeature
{
    public $name = 'yet-another-feature';

    /**
     * Resolve the feature's initial value.
     */
    public function resolve(mixed $scope): mixed
    {
        return Lottery::odds(0.5);
    }
}
