<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    //
    function index()
    {
       return Http:: get('https://review-api.udacity.com/api/v1/me/student_feedbacks');
    }
}