<?php

namespace App\Actions\Students;

use App\Http\Requests\Students\LoginStudentRequest;
use F9Web\ApiResponseHelpers;
use Illuminate\Support\Facades\Auth;
use App\Models\Students;

class LoginStudentAction
{
    use ApiResponseHelpers;

    public function handle(LoginStudentRequest $request): \Illuminate\Http\JsonResponse
    {
        $request->validated($request->all());

        if(!Auth::attempt($request->only('email','password')))
        {
            return $this->respondFailedValidation('credentials not matching');
        }

        $student = Students::where('email', $request->email)->first();

        return $this->respondWithSuccess
        ([
            'student' => $student,
            'token' => $student->createToken('API Token of' . $student->name)->plainTextToken
        ]);
    }
}
