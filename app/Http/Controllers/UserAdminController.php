<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::where('role', '=', 'user')->paginate(10),
        ]);
    }

    protected function rules(Request $request, $user)
    {
        return Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'phone' => ['required', 'string', 'max:20', Rule::unique('users')->ignore($user->id)],
        ]);
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $validator = $this->rules($request, $user);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();
            return back()->with(['status' => 'User data updated successfully']);
        }
    }

    public function destroy(int $id)
    {
        $user = User::find($id);
        if ($user->role == User::ADMIN_ROLE) {
            return back()->with(['error' => 'You can not delete an admin']);
        }
        $user->delete();
        return back()->with(['status' => 'User deleted successfully']);
    }

}
