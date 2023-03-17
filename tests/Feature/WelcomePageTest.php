<?php

declare(strict_types=1);

it('can see welcome page', function () {
    \Pest\Laravel\get(route('homepage'))
        ->assertSee('Laravel');
});
