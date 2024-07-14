<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'products';

    // Define the primary key
    protected $primaryKey = 'id';

    // Define the fillable fields
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        // Add other fields as needed
    ];

    // Define the guarded fields (fields that cannot be mass-assigned)
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Define the timestamps
    public $timestamps = true;
}