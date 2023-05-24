<?php

namespace App\Observers;

use App\Models\RestaurantDetail;
use App\Models\User;
use App\Models\UserAddress;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function created(User $user)
    {
        if ($user->role == 'seller') {
            RestaurantDetail::create([
                'name' => null,
                'restaurant_categories_id' => null,
                'address' => null,
                'phone' => null,
                'user_id' => User::all()->last()->id
            ]);
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }


}