<?php

declare(strict_types=1);

it('uses repository pattern', function () {
    expect('App\Models')
        ->toOnlyBeUsedIn('App\Repositories');
});
