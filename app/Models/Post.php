<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $fillable = ['judul' , 'slug' , 'excerpt' , 'body'];
    protected $guarded = ['id'];
    protected $with = ['user' , 'category'];

    // membuat query scope, agar query cukup sekali tapi dapat dipanggil berkali kali
    // contoh penggunaannya $post::Filter()->latest()
    public function scopeFilter($query, array $filters){
        // request sebainya disimpan di controller karena itu merupakan pekerjaan controller
        // jadi kode dibawah saya komen
        // if (request('search')) {
        //     return $query->where('title' , 'like', '%' . request('search') . '%')
        //     ->orWhere('body' , 'like', '%' . request('search') . '%');
        // }

        // cara 1
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title' , 'like', '%' . $filters['search'] . '%')
        //      ->orWhere('body' , 'like', '%' . $filters['search'] . '%');
        // }

        // cara 2 menggunakan when laravel dan Null Coalescing Operator ??
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                             ->orWhere('body', 'like', '%' . $search . '%');
             });
         });
        

        $query->when($filters['category'] ?? false , function($query,$category){
            return $query->whereHas('category',function($query) use ($category){
                return $query->where('slug',$category);
            });
            
        });

        $query->when($filters['author'] ?? false , function($query,$author){
            return $query->whereHas('user',function($query) use ($author){
                return $query->where('username',$author);
            });
            
        });
        
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
