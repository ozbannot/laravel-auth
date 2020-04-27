<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * 使用テーブル名
    * @var string
    */
    protected $table = 'operation_info';

    // 認証時のログインIDで使用するカラム名を指定
public function getAuthIdentifierName()
{
  return 'name';
}

// 標準で実装されている継続ログイン機能でエラーが発生するのを防ぐために記述する
public function setRememberToken($value) {
  return $this;
}

// 既存テーブルからMD5ハッシュ化されたパスワード情報を返すメソッド
public function getAuthPassword()
{
  $hash_pass = $this->password;
  return $hash_pass;
}

}
