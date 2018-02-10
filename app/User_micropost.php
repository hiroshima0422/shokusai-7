<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_micropost extends Model
{
    protected $fillable = ['user_id', 'micropost_id'];
    
    public function followings()
    {
        return $this->belongsToMany(User_micropost::class, 'user_micropost', 'user_id', 'micropost_id')->withTimestamps();
    }
    
    public function followers()
    {
        return $this->belongsToMany(User_micropost::class, 'user_micropost', 'micropost_id', 'user_id')->withTimestamps();
    }
    
    public function oki_follow($userId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_oki_following($userId);
        // 自分自身ではないかの確認
        $its_me = $this->id == $userId;
        
        if ($exist || $its_me) {
            // 既にフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->oki_followings()->attach($userId);
            return true;
        }
    }
    
    public function oki_unfollow($userId)
    {
        // 既にフォローしているかの確認
        $exist = $this->is_oki_following($userId);
        // 自分自身ではないかの確認
        $its_me = $this->id == $userId;
        
        if ($exist && !$its_me) {
            // 既にフォローしていればフォローを外す
            $this->oki_followings()->detach($userId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }
    
    public function is_oki_following($userId) {
        return $this->oki_followings()->where('micropost_id', $userId)->exists();
    }
    
    
    
    
    
}
