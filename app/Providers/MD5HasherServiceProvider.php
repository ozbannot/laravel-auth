<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MD5Hasher;

class MD5HasherServiceProvider extends ServiceProvider {

protected $defer = true;

public function register()
{
  $this->app->singleton('hash', function() {
    return new MD5Hasher;
  });
}

public function provides()
{
  return ['hash'];
}
}