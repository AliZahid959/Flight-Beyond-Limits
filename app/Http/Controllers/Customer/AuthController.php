<?php

namespace App\Http\Controllers\Customer;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\CustomerEmailVerify;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Models\PasswordReset;


class AuthController extends Controller
{


}
