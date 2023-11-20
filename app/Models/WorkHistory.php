<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'position',
        'start_date',
        'end_date',
        'responsibilities',

        // Relationships
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
