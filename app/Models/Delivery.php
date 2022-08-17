<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $input)
 * @method static find($id)
 */
class Delivery extends Model
{
    protected $table = 'delivery';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'address',
        'quantity',
        'status_payment' => 'boolean',
        'product_id'
    ];
}
