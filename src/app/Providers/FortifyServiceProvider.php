<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Validator;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
         $this->app->singleton(LogoutResponseContract::class, LogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::registerView(function () {
            return view('auth.register');
        });

        Fortify::loginView(function () {
            return view('auth.login');
        });
        config(['fortify.redirects.register' => '/profile/edit']);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(10)->by($email . $request->ip());
        });
        Fortify::authenticateUsing(function (Request $request) {
            // バリデーションを追加
            Validator::make($request->all(), [
                'email' => ['required', 'email'], // 必須かつ有効なメールアドレス
                'password' => ['required'], // 必須
            ], [
                'email.required' => 'メールアドレスを入力してください',
                'email.email' => '有効なメールアドレス形式で入力してください',
                'password.required' => 'パスワードを入力してください',
            ])->validate();

            // ユーザー認証処理
            $user = User::where('email', $request->email)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }

            return null; // 認証失敗
        });
    }
}
