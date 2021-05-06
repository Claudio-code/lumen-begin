<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function index(): array | Collection
    {
        return User::all();
    }
}
