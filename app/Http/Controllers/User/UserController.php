<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\UserGroups;
use App\Models\UsersGroupMenus;
use App\Models\Menus;

use Carbon\Carbon;

class UserController extends Controller
{
    //sub menu 1
    public function user(Request $request, $user)
    {
        $nama = $request->input('nama');

        $data = Users::leftjoin("tbl_user_groups", "tbl_user_groups.id_user_groups", "login.level")
        ->when($nama, function ($query) use ($nama) {
            $query->where('login.name', 'LIKE', "%$nama%");
        })
        ->orderBy("login.id", "desc")->paginate(10);

        $data->user = $user;

        return view('app/user.users', compact('data', 'nama', 'user'));
    }

    public function userForm(Request $request, $user, $id=null)
    {
        $data = [];
        if(!empty($id)){
            $data = Users::find($id);
        }

        $usersGroups = UserGroups::all();

        return view('app/user.users-form', compact('data', 'usersGroups', 'user'));
    }

    public function submitUser(Request $request, $user, $id=null)
    {
        $allParams = $request->input();

        $arr = [
            "name"      => $allParams["nama"],
            "username"  => $allParams["username"],
            "password"  => bcrypt($allParams["password"]),
            "level"     => $allParams["level"],
        ];

        try {
            if($id === "noid"){
                $users = Users::create($arr);   
            } else {
                $users = Users::findOrFail($id);
                $users->update($arr);
            }

            return response()->json(['message' => 'Record created successfully', 'data' => $users], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create record', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function groupUser(Request $request, $user)
    {
        $nama = $request->input('nama');

        $data = UserGroups::when($nama, function ($query) use ($nama) {
            $query->where('nama_groups', 'LIKE', "%$nama%");
        })
        ->orderBy("id_user_groups", "desc")->paginate(10);

        $data->user = $user;

        return view('app/user.group-users', compact('data', 'nama', 'user'));

    }

    public function groupUserForm(Request $request, $user, $id=null)
    {
        $data          = [];
        $dataGroupUser = [];

        if(!empty($id)){
            $data = UserGroups::where("id_user_groups", $id)->first();
            $dataGroupUser = UsersGroupMenus::where("id_groups", $id)->get();
        }

        $menus = Menus::all();

        return view('app/user.group-users-form', compact('data', 'menus', 'dataGroupUser', 'user'));
    }

    public function submitGroupUser(Request $request, $user)
    {

        $allParams = $request->input();
        $arr = [
            "nama_groups"     => $allParams["nama"],
            "STATUS"          => 1,
            "created_by"      => 1
        ];

        try {
            if($allParams["id_user_groups"] === "noid"){
                $userGroups = UserGroups::create($arr);
                foreach ($allParams["selected_menus"] as $menuId) {
                    $arr = [
                        "id_groups"  => $userGroups->id_user_groups,
                        "id_menu"    => $menuId
                    ];
                
                    UsersGroupMenus::create($arr);
                }
            } else {
                $userGroups = UserGroups::findOrFail($allParams["id_user_groups"]);
                $userGroups->update($arr);
                UsersGroupMenus::where("id_groups", $allParams["id_user_groups"])->delete();

                foreach ($allParams["selected_menus"] as $menuId) {
                    $arr = [
                        "id_groups"  => $allParams["id_user_groups"],
                        "id_menu"    => $menuId
                    ];
                
                    UsersGroupMenus::create($arr);
                }
            }

            return redirect($user.'/management-user/group-user');
        } catch (\Exception $e) {
            return redirect($user.'/management-user/group-user');
        }

    }

}
