<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssignmentController extends Controller {
    // Assignment-14/ Question 01
    function userName( Request $req ): string{
        $name = $req->input( 'name' );
        return $name;
    }

    // Assignment-14/ Question 02
    function userAgent( Request $req ): string{
        $userAgent = $req->header( 'User-Agent' );
        return $userAgent;
    }

    // Assignment-14/ Question 03
    function pageQuery( Request $req ) {
        $page = $req->query( 'page', null );

        return $page;
    }

    // Assignment-14/ Question 04
    function jsonReturn(): JsonResponse{

        $code = 200;

        $jsonRes = array(
            "message" => "Success",
            "data"    => array(
                "name" => "John Doe",
                "age"  => "25",
            ),
        );
        return response()->json( $jsonRes, $code );
    }

    // Assignment-14/ Question 05
    function fileUpload(Request $request):bool{

        $fileload=$request->file('avatar');

        $fileload->move(public_path('uploads'), $fileload->getClientOriginalName());

        return true;
    }

    // Assignment-14/ Question 06
    function remToken(Request $request){
        $rememberToken = $request->cookie('remember_token', null);

        return $rememberToken;
    }


    // Assignment-14/ Question 07
    function submit(Request $req){
        $email = $req->input('email');
        if($email){
            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully.'
            ]);
        }else{
            return "Please set your email and try again";
        }
    }
}
