<?php
/**
 * Created by PhpStorm.
 * User: SkillUP student
 * Date: 14.11.2017
 * Time: 22:35
 */

class PremiumUser extends User
{
    protected function validate(array $user)
    {
        $errors = parent::validate($user);
        //i@gmail.com
        if ( substr($user['email'], -9) != '@test.com') {
            $errors[] = 'Email долен заканчиватьяс на @test.com';
        }
        return $errors;
    }


}