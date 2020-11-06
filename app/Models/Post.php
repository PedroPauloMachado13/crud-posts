<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'body', 'user_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function tag(){

        return $this->belongsToMany(Tag::class);
    }

    public function assignTag($post,$tag){

        $this->tag();
        DB::insert('insert into posts_tags (post_id, tag_id) values (?, ?)', [$post, $tag]);

    }
}
