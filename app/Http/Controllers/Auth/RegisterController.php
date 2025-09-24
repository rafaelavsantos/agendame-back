<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegistered;
use App\Exceptions\UserHasBeenTakenException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @return UserResource
     * @throws UserHasBeenTakenException
     */
    public function __invoke(RegisterRequest $request): UserResource
    {
        $input = $request->validated();
        
        if(User::query()->whereEmail($input['email'])->exists()){
            throw new UserHasBeenTakenException();
        }

        $input['password'] = bcrypt($input['password']);
        $user = User::query()->create($input);

        UserRegistered::dispatch($user);

        return new UserResource($user);
    }
}
