<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseMaterial extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'unit_price', 'supplier_id', 'total_amount', 'description', 'unit', 'purchase_date', 'quantity'];

    /**
     * Get the supplier that owns the PurchaseMaterial
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
