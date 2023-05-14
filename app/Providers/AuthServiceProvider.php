<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('user_management_access', function ($user){
            foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            // return false;
        });
            Gate::define('permission_access', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            });
                Gate::define('permission_create', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('permission_delete', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('permission_show', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('permission_edit', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
            Gate::define('role_access', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            });
                Gate::define('role_create', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('role_delete', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('role_show', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('role_edit', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
            Gate::define('user_access', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            });
                Gate::define('user_create', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('user_delete', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('user_show', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });
                Gate::define('user_edit', function ($user){
                    foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
                });


        Gate::define('hotel_access', function ($user){
            foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
        });
            Gate::define('hotel_show', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            });
            Gate::define('hotel_create', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            });
            Gate::define('hotel_edit', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            });
            Gate::define('hotel_delete', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 1;
                }
            });
            

            Gate::define('advise_access', function ($user){
                foreach($user->roles as $role)
                    {
                        return $role->pivot->role_id == 1;
                    }
            });
                Gate::define('advise_delete', function ($user){
                    foreach($user->roles as $role)
                    {
                        return $role->pivot->role_id == 1;
                    }
                });
        Gate::define('dashboard', function ($user){
            foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2 || 1;
                }
        });
        Gate::define('room_type_access', function ($user){
            foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
        });
            Gate::define('room_type_create', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('room_type_edit', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('room_type_show', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('room_type_delete', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
        Gate::define('room_access', function ($user){
            foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
        });
            Gate::define('room_create', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('room_edit', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('room_show', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('room_delete', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
        Gate::define('booking_access', function ($user){
            foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
        });
            Gate::define('booking_create', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_edit', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_show', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_delete', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_access', function ($user){
                foreach($user->roles as $role)
                    {
                        return $role->pivot->role_id == 2;
                    }
            });
            Gate::define('coupon_create', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2 || 1;
                }
            });
            Gate::define('coupon_edit', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2 || 1;
                }
            });
            Gate::define('coupon_show', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2 || 1;
                }
            });
            Gate::define('coupon_delete', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2 || 1;
                }
            });
            Gate::define('coupon_access', function ($user){
                foreach($user->roles as $role)
                    {
                        return $role->pivot->role_id == 2 || 1;
                    }
            });

            Gate::define('image_create', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('image_edit', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('image_delete', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('image_access', function ($user){
                foreach($user->roles as $role)
                    {
                        return $role->pivot->role_id == 2;
                    }
            });

            Gate::define('booking_room_create', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_room_edit', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_room_show', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_room_delete', function ($user){
                foreach($user->roles as $role)
                {
                    return $role->pivot->role_id == 2;
                }
            });
            Gate::define('booking_room_access', function ($user){
                foreach($user->roles as $role)
                    {
                        return $role->pivot->role_id == 2;
                    }
            });
            Gate::define('searchRoom', function ($user){
                foreach($user->roles as $role)
                    {
                        return $role->pivot->role_id == 2;
                    }
            });
    }
}
