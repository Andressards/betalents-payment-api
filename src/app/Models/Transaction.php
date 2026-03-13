<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'client_id',
        'gateway',
        'external_id',
        'status',
        'amount',
        'card_last_numbers'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'transaction_products')
            ->withPivot('quantity');
    }
}
