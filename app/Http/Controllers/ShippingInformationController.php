<?php

namespace App\Http\Controllers;

use App\Models\ShippingInformation;
use Illuminate\Http\Request;

class ShippingInformationController extends Controller
{

  /**
   * Function for handling update of shipping information
   */
  public function update(Request $request)
  {
    $requestType = $request->type;
    // If the request is for updating shipping details
    if ($requestType === 'shipping_details') {
      try{
        // Validate incoming request data
        $validatedData = $request->validate([
          'data.first_name' => 'required|string|max:25',
          'data.last_name' => 'required|string|max:25',
          'data.telephone' => 'required|string|max:25',
          'data.address' => 'required|string|max:25',
          'data.city' => 'required|string|max:25',
          'data.postal_code' => 'required|string|max:10',
          'data.country' => 'required|string|max:25',
        ]);
      } catch (\Illuminate\Validation\ValidationException $e) {
        // If validation fails, return a JSON response with error status and error message
        return response()->json([
          'status' => 'error',
          'message' => $e->errors()
        ]);
      }

      // Update shipping details
      $shippingDetails = $validatedData['data'];
      $user = auth()->user();
      $information = $user->information;

      // If the user does not have shipping information, create a new shipping information record
      if ($information->shipping_id === null) {
        $shippingInformation = new ShippingInformation();
      } else {
        $shippingInformation = $information->shipping_information;
      }
      $shippingInformation->first_name = $shippingDetails['first_name'];
      $shippingInformation->last_name = $shippingDetails['last_name'];
      $shippingInformation->telephone = $shippingDetails['telephone'];
      $shippingInformation->address = $shippingDetails['address'];
      $shippingInformation->city = $shippingDetails['city'];
      $shippingInformation->postal_code = $shippingDetails['postal_code'];
      $shippingInformation->country = $shippingDetails['country'];
      $shippingInformation->save();
      if ($information->shipping_id === null) {
        $information->shipping_id = $shippingInformation->id;
        $information->save();
      }
      // Return a JSON response with success status and success message
      return response()->json([
        'status' => 'success',
        'message' => 'Shipping information updated successfully'
      ]);
    }
    // If the request is for updating user details
    else if ($requestType === 'user_details') {
      // Delegate the request to the ShippingInformationController
      $response = (new UserController())->update($request);
      return $response;
    }

    // If the request type is not recognized
    return response()->json([
      'status' => 'error',
      'message' => 'Invalid request types'
    ]);

  }
}
