<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Forward to a URL by a shortcode.
     *
     * @param  string            $code
     * @param  App\Models\Link   $link
     * @return Illuminate\Http\RedirectResponse
     */
    public function get($code, Link $link)
    {
        $link = $link->withCode($code)->first();

        if (!$link) {
            return abort(404);
        }

        return redirect()->to($link->getUrl());
    }
}
