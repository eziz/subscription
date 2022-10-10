<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PlanController extends Controller
{
    public function index(){
        return view("plans");
    }
}
