<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Information;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    /**
     * Function for handling user logout
    */
    public function logout() {
      auth()->logout();
      return redirect('/');
    }

    /**
    * Function for handling user login
    */
    public function login(Request $request) {
      // Validate incoming fields
      $incomingFields = $request->validate([
        'login_email' => 'required',
        'login_password' => 'required'
      ]);

      // Try to authenticate the user with the provided email and password
      if (auth()->attempt(['email' => $incomingFields['login_email'], 'password'=>$incomingFields['login_password']])){
        // If authentication is successful, regenerate session ID to avoid session fixation attacks
        $request->session()->regenerate();
        toast('Login successful', 'success');
        return redirect('/account');
      }else {
        // If authentication fails, display an error message
        toast('INVALID USERNAME OR PASSWORD', 'error');
        return redirect('/login');
      }
    }

    /**
     * Function for handling registration of a new user
    */
    public function register(Request $request) {
      try {
        // Validate incoming request data
        $incomingFields = $request->validate([
          'name' => ['required', 'min:5', 'max:200', Rule::unique('users', 'name')],
          'email' => ['required', 'email', Rule::unique('users','email')],
          'password' => ['required', 'min:8', 'max:200'],
          'checkbox' => 'accepted'
        ]);
      } catch (\Illuminate\Validation\ValidationException $e) {
        // If validation fails, display an error message
        $errors = $e->errors();
        $messages = [];
        foreach ($errors as $error) {
          $messages[] = is_array($error) ? implode(', ', $error) : $error;
        }
        $message = implode(' ', $messages);
        toast($message, 'error');
        return redirect('/signup');
      }

      // Hash the password for security
      $incomingFields['password'] = bcrypt($incomingFields['password']);

      // Create a new user with the validated data
      $user = new User();
      $user->name = $incomingFields['name'];
      $user->email = $incomingFields['email'];
      $user->password = $incomingFields['password'];
      $user->save();

      // Automatically log the user in after registration
      auth() -> login($user);

      // Create related information record for the user
      $information = new Information();
      $information->user_id = $user->id;
      $information->save();

      // Display a success alert and redirect to account page
      Alert::success('Success', 'Account created successfully');
      return redirect('/account');
    }

    /**
     * Function for handling update of user details
    */
    public function update(Request $request)
    {
      $requestType = $request->type;
      // If the request is for updating user details
      if ($requestType === 'user_details') {
        try {
          // Validate incoming request data
          $validatedData = $request->validate([
            'data.name' => 'required|string|min:5|max:255',
            'data.email' => 'required|string|email|max:255',
          ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
          // If validation fails, return a JSON response with error status and error message
          return response()->json([
            'status' => 'error',
            'message' => $e->errors()
          ]);
        }

        // Update user details
        $userDetails = $validatedData['data'];
        $user = auth()->user();
        $user->name = $userDetails['name'];
        $user->email = $userDetails['email'];
        $user->save();

        // Return a JSON response with success status and success message
        return response()->json([
          'status' => 'success',
          'message' => 'Profile updated successfully'
        ]);
      }

      // If the request is for updating shipping details
      else if ($requestType === 'shipping_details') {
        // Delegate the request to the ShippingInformationController
        $response = (new ShippingInformationController)->update($request);
        return $response;
      }

      // If the request type is not recognized
      return response()->json([
        'status' => 'error',
        'message' => 'Invalid request type'
      ]);
    }
}
