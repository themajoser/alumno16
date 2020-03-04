<?php

namespace App\Policies;

use App\User;

use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    public function before($user,$role)
    {
        if( $role->name=='Admin'){
            return null;
        }
        return $user->hasRole('Admin') ? true : null;
    }


    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('Create roles');
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->hasPermissionTo('Update roles');
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function delete(User $user, Role $role)
    {
       if( $role->name=='Admin'){
           return null;
       }
        return $user->hasPermissionTo('Delete roles');
    }

}
