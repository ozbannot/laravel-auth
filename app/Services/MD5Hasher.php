<?php
namespace App\Services;
 
class MD5Hasher implements \Illuminate\Contracts\Hashing\Hasher {
 
    public function make($value, array $options = [])
    {
        return md5($value);
    }
 
    public function check($value, $hashedValue, array $options = [])
    {
        return (md5($value) == $hashedValue);
    }
 
    public function needsRehash($hashedValue, array $options = [])
    {
        return false;
    }
}