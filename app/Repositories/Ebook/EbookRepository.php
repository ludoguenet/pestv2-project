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

    /**
     * @param Ebook $ebook
     * @param array<string, mixed> $validated
     * @return Ebook
     */
    public function update(
        Ebook $ebook,
        array $validated,
    ): Ebook {
        $ebook->update($validated);

        return $ebook->refresh();
    }
}
