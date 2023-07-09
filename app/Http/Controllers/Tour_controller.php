<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour_model;
use Illuminate\Support\Facades\DB; // include DB Class

use Illuminate\Support\Facades\Auth; // include for AUTH
use App\Providers\RouteServiceProvider;
use App\Models\user_comment_china_package;
use App\Models\user_comment_switzerland_package;
use App\Models\user_comment_thailand_package;

class Tour_controller extends Controller
{


    public function add()
    {
        $tour = Tour_model::all();
        $dis = DB::select("select * from tbl_package");

        return view('booking', ["v_show" => $dis]);
    }


    public function view()
    {
        $user = Auth::user();
        $t = DB::table('tbl_bookingmore')
            ->leftJoin('tbl_package', 'tbl_package.id', '=', 'tbl_bookingmore.country')
            ->select('tbl_bookingmore.*', 'tbl_package.country', 'tbl_package.price')
            ->where('tbl_bookingmore.user_id', $user->id)
            ->get();

        return view('userhistory', ['v_show' => $t]);
    }





    public function getDestinations()
    {
        $country = Destination::pluck('name', 'id');
        return response()->json($country);
    }




    public function booking(Request $request)
    {

        $user = Auth::user();

        $name = $request->input('name');
        $email = $request->input('email');
        $start = $request->input('start');
        $price = $request->input('price');

        $country = $request->input('txt_country');
        $amount = $request->input('amount');
        $s_request = $request->input('s_request');

        // If s_request is null, set it to an empty string
        $s_request = $s_request ?? '';

        // Retrieve the authenticated user's ID
        $userId = auth()->id();

        $t = new Tour_model();

        // Rest of your code to process the form data and perform necessary actions


        // Set the values
        $t->user_id = $user->id;

        $t->name = $name;
        $t->email = $email;
        $t->start = $start;

        $t->price = $price;
        $t->country = $country;
        $t->amount = $amount;
        $t->s_request = $s_request;

        // Save the data
        $t->save();

        // Optionally, you can redirect the user to a success page or perform any other actions

        // For example, redirect to the user history page
        return redirect('/userhistory');
    }





    //User Comment in chiana pakage
    public function china(Request $request)
    {
        $tour = new User_comment_china_package();

        $tour->china_name = $request->input('china_name');
        $tour->china_email = $request->input('china_email');
        $tour->china_website = $request->input('china_website');
        $tour->china_message = $request->input('china_message');

        $tour->save();
        return redirect('/china')->with('success', 'Tour booked successfully!');
    }

    public function getUserCommentData()
    {
        $v_show = User_comment_china_package::all();
        return view('/tbl_user_comment', ['v_show' => $v_show]);
    }

    public function getUserCommentForm()
    {
        return view('china');
    }


    //User Comment in switzerland pakage
    public function switzerland(Request $request)
    {
        $tour = new User_comment_switzerland_package();

        $tour->switzerland_name = $request->input('switzerland_name');
        $tour->switzerland_email = $request->input('switzerland_email');
        $tour->switzerland_website = $request->input('switzerland_website');
        $tour->switzerland_message = $request->input('switzerland_message');

        $tour->save();
        return redirect('/switzerland')->with('success', 'Tour booked successfully!');
    }

    public function getUsersCommentData()
    {
        $v_show = User_comment_switzerland_package::all();
        return view('/tbl_user_comment', ['v_show' => $v_show]);
    }

    public function getUsersCommentForm()
    {
        return view('switzerland');
    }


    //User Comment in thailand pakage
    public function thailand(Request $request)
    {
        $tour = new User_comment_thailand_package();

        $tour->thailand_name = $request->input('thailand_name');
        $tour->thailand_email = $request->input('thailand_email');
        $tour->thailand_website = $request->input('thailand_website');
        $tour->thailand_message = $request->input('thailand_message');

        $tour->save();
        return redirect('/thailand')->with('success', 'Tour booked successfully!');
    }

    public function getUserssCommentData()
    {
        $v_show = User_comment_thailand_package::all();
        return view('/tbl_user_comment', ['v_show' => $v_show]);
    }

    public function getUserssCommentForm()
    {
        return view('thailand');
    }





    public function submitForm(Request $request)
    {
        $tour = new Tour_model;
        $tour->name = $request->input('name');
        $tour->email = $request->input('email');
        $tour->start = $request->input('start');
        $tour->price = $request->input('price');
        $tour->amount = $request->input('amount');

        $tour->country = $request->input('country');
        $s_request = $request->input('s_request');


        $tour->save();


        return redirect('/tour-booking')->with('success', 'Tour booked successfully!');
    }
}
