<?php

namespace App\Http\Controllers\Students;

use App\Actions\Students\RegisterStudentAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Students\RegisterStudentRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function register(RegisterStudentAction $action, RegisterStudentRequest $request)
    {
        return $action->handle($request);
    }
}
