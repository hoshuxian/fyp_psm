<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\student;
use App\Models\supervisor;
use App\Models\coordinator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
             'role'=>['required'],
            ])->validate();

        if (($input['role'])=='student')
             {
                $var = new student;
                $var->studentName =$input['name'];
                $var->stdemail= $input['email'];
                $var->save();
                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' =>Hash::make($input['password']),
                    'role'=>$input['role'],
                ]);
             } else if (($input['role'])=='supervisor')
             {
                $var = new supervisor;
                $var->svname= $input['name'];
                $var->svemail= $input['email'];
                $var->save();
                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' =>Hash::make($input['password']),
                    'role'=>$input['role'],
                ]);
             } else {
                $var = new coordinator;
                $var->coordinatorname= $input['name'];
                $var->coordinatoremail= $input['email'];
                $var->save();
                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' =>Hash::make($input['password']),
                    'role'=>$input['role'],
                ]);
             }

    }
}

