<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    public function tag(string $name): void
    {
        // Give me a tag from the table & if it doesn't exist create one
        $tag = Tag::firstOrCreate(['name' => $name]);

        // Update the pivot table between Job & Tag
        $this->tags()->attach($tag);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
