<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Category extends Model
{
    use HasFactory;
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
