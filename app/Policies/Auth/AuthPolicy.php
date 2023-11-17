<?php

namespace App\Policies\Auth;

use Illuminate\Auth\Access\HandlesAuthorization;

class AuthPolicy
{
    use HandlesAuthorization;

    // Any method here that match the controller method name will be automatically called.
}
