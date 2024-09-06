<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Group;
use App\Models\Order;
use App\Models\Traits\Filterable;

class Product extends Model
{
    use Filterable;
    
    protected $table = 'products';
    protected $guarded = false;

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }
    
    public function colors() {
        return $this->belongsToMany(Tag::class, 'color_products', 'product_id', 'color_id');
    }

    public function group() {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function getImageUrlAttribute(){
        return url('storage/' . $this->preview_image);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products', 'product_id', 'order_id');
    }
}
