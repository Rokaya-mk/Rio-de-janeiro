<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;


class ForgotPasswordController extends BaseController
{
    //
    use SendsPasswordResetEmails;



    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response(['message'=> $response]);

    }


    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response(['error'=> $response], 422);

    }
}
