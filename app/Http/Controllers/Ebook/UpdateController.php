<?php

declare(strict_types=1);

namespace App\Http\Controllers\Ebook;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class UpdateController extends Controller
{
    public function __invoke(
        Request $request,
        Ebook $ebook,
    ): RedirectResponse {
        $validated = $request->validate([
            'title' => [
                'required',
                'max:255',
            ],
            'description' => [
                'required',
                'max:300',
            ],
            'amount' => [
                'required',
                'numeric',
                'gt:0',
            ],
        ]);

        $ebook->update($validated);

        return redirect(
            to: route('homepage'),
        );
    }
}
