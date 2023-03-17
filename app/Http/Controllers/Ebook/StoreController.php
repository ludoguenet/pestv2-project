<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ebook\StoreRequest;
use App\Repositories\Ebook\EbookRepository;
use Illuminate\Http\RedirectResponse;

final class StoreController extends Controller
{
    public function __construct(
        private readonly EbookRepository $ebookRepository,
    ) {}

    public function __invoke(
        StoreRequest $request,
    ): RedirectResponse {
        $this
            ->ebookRepository
            ->store(
                validated: (array) $request->validated(),
            );

        return redirect(
            to: route('homepage'),
        );
    }
}
