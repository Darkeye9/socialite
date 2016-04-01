<?php

namespace Laravel\Socialite\Two;

use Laravel\Socialite\AbstractUser;

class User extends AbstractUser
{
    /**
     * The user's access token.
     *
     * @var string
     */
    public $token;

    /**
     * The user's refresh token.
     *
     * @var string
     */
    public $refresh_token;

    /**
     * Set the token on the user.
     *
     * @param  string  $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token['access_token'];
        $this->refresh_token = $token['refresh_token'];

        return $this;
    }
}
