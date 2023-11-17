<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Shamaseen\Repository\Utility\Controller as Controller;
use App\Http\Requests\Auth\authRequest;
use App\Http\Resources\Auth\authCollection;
use App\Http\Resources\Auth\authResource;
use App\Policies\Auth\authPolicy;
use App\Repositories\Auth\authRepository;

/**
 * Class authController.
 *
 * @property authRepository $repository
 */
class AuthController extends Controller
{

    public string $routeIndex = 'auths.index';

    public string $pageTitle = 'auth';
    public string $createRoute = 'auths.create';

    public string $viewIndex = 'auths.index';
    public string $viewCreate = 'auths.create';
    public string $viewEdit = 'auths.edit';
    public string $viewShow = 'auths.show';

	public ?string $resourceClass = authResource::class;

	public ?string $collectionClass = authCollection::class;

	public ?string $policyClass = authPolicy::class;

	public string $requestClass = authRequest::class;


    /**
     * authController constructor.
     *
     * @param authRepository $repository
     */
    public function __construct(authRepository $repository)
    {
        parent::__construct($repository);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/notes');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return redirect('/login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        Auth::login($user);

        return redirect('/notes');
    }

}
