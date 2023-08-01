<?php

namespace App\Http\Controllers;

use App\Models\LogisticsModel;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class LogisticsController extends Controller
{
    public function listLoads()
    {
        $data = LogisticsModel::get();
        return view('loads', compact('data'));
    }

    public function addData(Request $request)
    {
        if (isset($request->add)) {
            LogisticsModel::create([
                'name' => $request->name,
                'from' => $request->from,
                'to' => $request->to,
                'trailer_type' => $request->trailer_type,
                'load_time' => $request->load_time,
            ]);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $logistics = LogisticsModel::findOrFail($id);
        return view('update', compact('logistics'));
    }

    public function update(Request $request, $id)
    {
        $logistics = LogisticsModel::findOrFail($id);
        $logistics->name = $request->input('name');
        $logistics->from = $request->input('from');
        $logistics->to = $request->input('to');
        $logistics->trailer_type = $request->input('trailer_type');
        $logistics->load_time = $request->input('load_time');
        $logistics->save();

        return redirect()->route('logistics.edit', $id)->with('success', 'Lojistik yükleme başarıyla güncellendi.');
    }
    public function homePage()
    {
        $data = LogisticsModel::get();
        return view("welcome", compact("data"));
    }
    public function registration()
    {
        return view('auth.register');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username|min:8',
            'password' => 'required|min:8'
        ]);
        $user = new User();
        $user->full_name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $result = $user->save();
        if ($result) {
            return back()->with('success', 'Succesfully registered');
        } else {
            return back()->with('fail', 'Something went wrong!');
        }
    }
    public function loginUser(Request $request)
    {
        $user = User::where('username', $request->username)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            auth()->login($user);
            return redirect()->route('admin', ['id' => $user->id]);
        } else {
            return back()->with('fail', 'Kullanıcı adı veya şifre yanlış');
        }
    }
    public function index()
    {
        $data = LogisticsModel::all();
        return view('loads', compact('data'));
    }

    public function destroy($id)
    {
        LogisticsModel::findOrFail($id)->delete();
        return redirect()->route('logistics.index')->with('success', 'Veri başarıyla silindi.');
    }

    public function adminPage($id)
    {
        $user = User::findOrFail($id);
        return view('admin', compact('user'));
    }

}
