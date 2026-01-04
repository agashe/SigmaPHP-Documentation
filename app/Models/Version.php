<?php

namespace App\Models;

use SigmaPHP\DB\ORM\Model;
use App\Models\Category;

class Version extends Model
{
    /**
     * Get all documentation topics in this version.
     *
     * @return array<Category>
     */
    public function categories()
    {
        return $this->hasRelation(
            Category::class,
            'category_id',
            'id'
        );
    }
}
