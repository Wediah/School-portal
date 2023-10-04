<?php

namespace App\Http\Controllers\Students;

use App\Actions\Students\LoginStudentAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Students\LoginStudentRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginStudentRequest $request, LoginStudentAction $action)
    {
        return $action->handle($request);
    }
}
