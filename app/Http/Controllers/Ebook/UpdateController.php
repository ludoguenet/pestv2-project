<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ebook\UpdateRequest;
use App\Models\Ebook;
use App\Repositories\Ebook\EbookRepository;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __construct(
        private readonly EbookRepository $ebookRepository,
    ) {}

    public function __invoke(
        UpdateRequest $request,
        Ebook $ebook,
    ): RedirectResponse {
        $this
            ->ebookRepository
            ->update(
                ebook: $ebook,
                validated: (array) $request->validated(),
            );

        return redirect(
            to: route('homepage'),
        );
    }
}
