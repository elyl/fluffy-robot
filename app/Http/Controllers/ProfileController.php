namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Profile Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the profile view and modification of user data. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for data modification request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['string', 'max:255'],
            'lastname' => ['string', 'max:255'],
	    'email' => ['string', 'email', 'max:255', 'unique:users', 'confirmed'],
	    'password' => ['string', 'password', 'confirmed'],       
	]);
    }


  public function showProfile()
  {
    return view('profile');
  }

    /**
     * Changes user data.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function editProfile(array $data)
    {
        return User::modify([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
	    'email' => $data['email'],
	    'password' => Hash::make($data['password']),
        ]);
    }
}

