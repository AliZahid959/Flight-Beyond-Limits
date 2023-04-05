<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Order extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function getOrderDateAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/y');
    }

    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function software()
    {
        return $this->belongsTo(Software::class, 'software_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id') ;
    }


}
