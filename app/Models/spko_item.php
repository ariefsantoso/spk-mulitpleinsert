<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spko_item extends Model
{
    use HasFactory;
    protected $fillable = ['oridnal', 'id_product', 'qty'];

    /**
     * Get the comments for the blog post.
     */
    public function spko()
    {
        return $this->belongsTo(spko::class, 'oridnal');
    }

    /**
     * Get the comments for the blog post.
     */
    public function product()
    {
        return $this->belongsTo(product::class, 'id_product', 'id_product');
    }
}
