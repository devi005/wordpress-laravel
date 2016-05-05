<?php 
// namespace App\Providers;
namespace App\Repositories\User;
 
use Illuminate\Support\ServiceProvider;
 
class UserServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('App\Repositories\\User\\UserRepositoryInterface', 'App\Repositories\\User\\UserRepository');
    }
}