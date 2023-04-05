<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'meta_keyword' => 'array'
    ];

    /**
     * Get all of the sections for the Page
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany(PageSection::class);
    }
}
