<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getParentName() {
        $parent = Category::where('id', $this->attributes['parent_id'])
            ->get()
            ->first();
        return $parent === null ? "нет" : $parent->name;
    }
}
