<?php

namespace App\Resources\Models;

use Database\Factories\ResourceFactory;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Users\Models\User;

class Resource extends Model
{
    /** @use HasFactory<\Database\Factories\ResourceFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [  

    ];


    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
    /**
     * Return the factory for the model.
     * 
     * @return ResourceFactory
     */
    protected static function newFactory(): ResourceFactory
    {
        return new ResourceFactory();
    }

}
