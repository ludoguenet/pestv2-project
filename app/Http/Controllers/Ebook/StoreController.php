<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ebook\StoreRequest;
use App\Models\Ebook;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class StoreController extends Controller
{
    public function __invoke(
        StoreRequest $request,
    ): RedirectResponse {
        Ebook::create((array) $request->validated());

        return redirect(
            to: route('homepage'),
        );
    }
}
