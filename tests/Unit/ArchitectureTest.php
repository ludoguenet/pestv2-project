<?php

declare(strict_types=1);

it('uses repository pattern', function () {
    expect('App\Repositories')
        ->toOnlyBeUsedIn('App\Http\Controllers')
        ->toOnlyUse('App\Models');
});

it('never uses request', function () {
    expect('App\Http\Controllers')
        ->not->toUse('Illuminate\Http\Request');
});

it('never uses debug helpers')
    ->expect(['dd', 'ray', 'dump'])
    ->not->toBeUsed();

it('never uses facades')
    ->expect('Illuminate\Support\Facades')
    ->not->toBeUsed()
    ->ignoring('App\Providers')
    ->ignoring('App\Http\Middleware');
