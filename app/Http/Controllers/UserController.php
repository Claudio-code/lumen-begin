<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    public function index(): LengthAwarePaginator
    {
        return User::paginate(15);
    }

    public function view(int $id): Model
    {
        return User::findOrfail($id);
    }
}
