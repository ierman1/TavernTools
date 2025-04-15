<?php

namespace App\Users\Models;
use Database\Factories\CollectionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Collection extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'hash',
        'owner_id',
    ];
    
    /**
     * The owner of the collection.
     * @return BelongsTo<User>
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    /**
     * Return the factory for the model.
     * 
     * @return CollectionFactory
     */
    protected static function newFactory(): CollectionFactory
    {
        return new CollectionFactory();
    }
}
