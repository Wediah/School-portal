<?php
namespace App\Actions\Students;

use App\Http\Requests\Students\RegisterStudentRequest;
use App\Models\Students;
use F9Web\ApiResponseHelpers;
use Illuminate\Support\Facades\Hash;

class RegisterStudentAction
{
    use ApiResponseHelpers;
    public function handle(RegisterStudentRequest $request)
    {
        $request->validated($request->all());

        $student = Students::create([
            'title' => $request->title,
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'dateofbirth' => $request->dateofbirth,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return $this->respondWithSuccess([
            'student' => $student,
            'token' => $student->createToken('API Token of' . $student->name)->plainTextToken
        ]);


    }
}
