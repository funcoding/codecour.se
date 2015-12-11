<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Scope to get a record by a particular code.
     *
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @param  string $code
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithCode($query, $code)
    {
        return $query->where('code', $code);
    }

    /**
     * Get the URL to forward to.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
