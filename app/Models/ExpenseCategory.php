<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    public function subcategories()
{
    return $this->belongsTo(ExpenseCategory::class, 'parent_id');
}
}
