<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'livraison', 'adresse', 'ville', 'menu_items', 'total_price', 'email', 'user_id',
    ];

    protected $casts = [
        'menu_items' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
