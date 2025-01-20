<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function edit()
    {
        $user = Auth::user(); // ログイン中のユーザー情報
        return view('profile.edit', compact('user'));
    }
    public function update(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'postal_code' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'building' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048', // プロフィール画像は任意
        ]);

        // ログイン中のユーザーを取得
        $user = Auth::user();

        // 入力データを更新
        $user->name = $request->name;
        $user->postal_code = $request->postal_code;
        $user->address = $request->address;
        $user->building = $request->building;

        // プロフィール画像のアップロード処理
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        $user->save(); // データを保存

        return redirect("/");
    }
}
