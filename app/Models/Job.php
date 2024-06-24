<?php

namespace App\Models;

use Spatie\Tags\HasTags;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    use HasTags;
    use SoftDeletes;


    public function tag(string $name)
    { 
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);   
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
