<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Pennant\Feature;

class MyController extends Controller
{
    public function __invoke()
    {
        // authenticate a user...
        $user = User::query()->firstOr(fn () => User::factory()->create());
        Auth::login($user);

        Feature::for(auth()->user())->loadMissing(Feature::stored());

        return view('my-view');
    }
}
