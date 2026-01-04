<?php

namespace App\Models;

use SigmaPHP\DB\ORM\Model;
use App\Models\Version;
use App\Models\Page;

class Category extends Model
{
    /**
     * Get this category's version.
     *
     * @return Version|null
     */
    public function version()
    {
        return $this->hasRelation(
            Version::class,
            'id',
            'version_id',
        )[0] ?? null;
    }

    /**
     * Get the documentation page in this category.
     *
     * @return Page|null
     */
    public function page()
    {
        return $this->hasRelation(
            Page::class,
            'category_id',
            'id'
        )[0] ?: null;
    }
}
