<?php

namespace App\Models;

use SigmaPHP\Core\Models\BaseModel;
use App\Models\Category;

class Page extends BaseModel
{
    /**
     * Get this page's category.
     *
     * @return Category|null
     */
    public function category()
    {
        return $this->hasRelation(
            Category::class,
            'id',
            'category_id',
        )[0] ?? null;
    }

    /**
     * Get this page's table of content.
     *
     * @return array
     */
    public function tableOfContent()
    {
        return explode(',', $this->content);
    }
}
