<?php

declare(strict_types=1);

use function Pest\Laravel\post;

it('can store an ebook', function () {
    post(
        uri: route('ebooks.store'),
        data: [
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'amount' => fake()->randomFloat(2, 1, 80),
        ],
    )
        ->assertRedirect();
});
