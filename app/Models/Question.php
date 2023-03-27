<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'question',
        'is_active',
        'question_number'
    ];

    /**
     * Get the category that owns the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get all of the answers for the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    /**
     * Get all of the questionChoices for the Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionChoices(): HasMany
    {
        return $this->hasMany(QuestionChoice::class, 'question_id', 'id');
    }
}
