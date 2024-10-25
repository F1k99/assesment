<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        return User::get()->toQuery()->paginate($perPage);
    }
}
