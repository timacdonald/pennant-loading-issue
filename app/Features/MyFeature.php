<?php

namespace App\Features;

use Illuminate\Support\Lottery;

class MyFeature
{
    /**
     * Resolve the feature's initial value.
     */
    public function resolve(mixed $scope): mixed
    {
        return Lottery::odds(0.5);
    }
}
