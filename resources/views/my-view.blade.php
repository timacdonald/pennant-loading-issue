Welcome to the view!<br>

@feature(\App\Features\MyFeature::class)
    ✅
@else
    ❌
@endif

@feature(\App\Features\AnotherFeature::class)
    ✅
@else
    ❌
@endif

@feature(\App\Features\YetAnotherFeature::class)
    ✅
@else
    ❌
@endif

@dd(DB::getQueryLog());
