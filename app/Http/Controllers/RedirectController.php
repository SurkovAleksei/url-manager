<?php

namespace App\Http\Controllers;
use App\Models\Link;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirect($short_url)
    {
        $link = Link::where('short_url', $short_url)->firstOrFail();

        $link->clicks()->create([
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        $link->increment('clicks_count');

        return redirect($link->original_url);
    }
}
