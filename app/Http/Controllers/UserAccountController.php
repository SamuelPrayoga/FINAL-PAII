<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showUser()
    {
        $UserAccount = DB::table('users')->get();
        return view('Admin/kelolaakunpengguna', ['UserAccount' => $UserAccount]);
    }
    public function editakunpengguna($user_id)
    {
        $editakunpengguna = User::find($user_id);

        return view('autentication.EditAkunPengguna', compact('editakunpengguna'));
    }

    public function updateakunpengguna(Request $request, $user_id)
    {
        $update = User::find($user_id);

        $update->name = $request->name;
        $update->email = $request->email;
        $update->level = $request->level;
        $update->status = $request->status;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('img', $file);
            $update->avatar = $file;
        }
        $update->save();

        return redirect('dataakunpengguna');
    }

    public function deleteakunpengguna($user_id)
    {
        $deleteakunpengguna = User::find($user_id);
        if ($deleteakunpengguna->delete()) {
            return redirect()->back();
        }
    }
}
