<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class spko extends Model
{
    use HasFactory, AutoNumberTrait;


    protected $fillable = ['remarks', 'employee', 'trans_date', 'process', 'sw'];

    /**
     * Get the comments for the blog post.
     */
    public function items()
    {
        return $this->hasMany(spko_item::class, 'oridnal', 'id_spko');
    }

    /**
     * Get the comments for the blog post.
     */
    public function pegawai()
    {
        return $this->belongsTo(employee::class,'employee','id_employee');
    }

    /**
     * Get the comments for the blog post.
     */
    public function product()
    {
        return $this->belongsToMany(product::class, 'spko_items', 'oridnal', 'id_product', 'id_spko', 'id_product');
    }

    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    public function getAutoNumberOptions()
    {

        return [
            'sw' => [
                'format' => function () {
                    return 'SPKO'.date('ymd').'?';
                },
                'length' => 3
            ]
        ];
    }
}
