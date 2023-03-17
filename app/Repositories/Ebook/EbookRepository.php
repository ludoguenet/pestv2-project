<?php

declare(strict_types=1);

namespace App\Repositories\Ebook;

use App\Models\Ebook;

final class EbookRepository
{
    /**
     * @param array<string, mixed> $validated
     * @return void
     */
    public function store(
        array $validated,
    ): void {
        Ebook::create($validated);
    }
}
