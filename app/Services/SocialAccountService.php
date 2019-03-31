<?php 
namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\User;
use App\User_facebook;
class SocialAccountService
{
    public static function createOrGetUser(ProviderUser $providerUser, $social)
    {
        $email = $providerUser->getEmail() ?? $providerUser->getNickname();
        $user = User::whereEmail($email)->first();
        if (!$user) {
            session()->put('avatar',$providerUser->getAvatar());
            $user = User::create([
                'email' => $email,
                'name' => $providerUser->getName(),
                'password' => $providerUser->getName(),
                'level' => 2
            ]);
            $user_fb = new User_facebook();
            $user_fb->Name = $providerUser->getName();
            $user_fb->email = $providerUser->getEmail();
            $user_fb->avatar = $providerUser->getAvatar();
            $user_fb->save(); 
        }
        else{
            session()->put('avatar',$providerUser->getAvatar());
        }
            
        return $user;
    }
}