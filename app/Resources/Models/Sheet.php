<?php

namespace App\Resources\Models;

use Database\Factories\SheetFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
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

    /**
     * Return the factory for the model.
     *
     * @return SheetFactory
     */
    protected static function newFactory(): SheetFactory
    {
        return new SheetFactory();
    }

    /**
     * The resourceable model.
     *
     * @return MorphOne
     */
    public function resource(): MorphOne
    {
        return $this->morphOne(Resource::class, "resourceable");
    }
}
