<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'post_id', 'comment'
    ];
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
