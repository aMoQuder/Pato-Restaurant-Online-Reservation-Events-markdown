<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\UsersResource;

class UsersController extends Controller {

    // show all User function

    public function index(): JsonResponse {
        $User = UsersResource::collection( User::orderBy( 'created_at', 'desc' )->paginate( 9 ) );
        return  response()->json( [
            'success'=>true,
            'massage'=>'all Users retrived',
            'date'=>$User

        ], 201 );
    }
    // add  User function

    public function Store ( UserRequset $request ): JsonResponse {

        $User = User::create( [
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
            'password' =>Hash::make( $request->password ),
        ] );

        return  response()->json( [
            'success'=>true,
            'massage'=>' User is created',
            'date'=>new UsersResource( $User ),

        ], 201 );
    }
    // show one User function

    public function show ( $id ): JsonResponse {
        $User = User::Find( $id );
        if ( !$User ) {

            return  response()->json( [
                'success'=>false,
                'massage'=>'this user is not found ',
                'date'=>null,

            ], 404 );
        }
        return  response()->json( [
            'success'=>true,
            'massage'=>'all Users retrived',
            'date'=>new UsersResource( $User ),

        ], 201 );
    }
    // update User function

    public function update ( UserRequset $request, $id ): JsonResponse {
        $User = User::Find( $id );
        if ( !$User ) {

            return  response()->json( [
                'success'=>false,
                'massage'=>'this user is not found ',
                'date'=>null,

            ], 404 );
        }
        $user->update( [
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
            'password' =>Hash::make( $request->password ),
        ] );

        return  response()->json( [
            'success'=>true,
            'massage'=>'all Users retrived',
            'date'=>new UsersResource( $User ),

        ], 201 );
    }
    // delete User function

    public function delete ( $id ): JsonResponse {
        $User = User::Find( $id );
        if ( !$User ) {

            return  response()->json( [
                'success'=>false,
                'massage'=>'this user is not found ',
                'date'=>null,

            ], 404 );
        }
        $User->delete();

        return  response()->json( [
            'success'=>true,
            'massage'=>'this Users is deleted',
            'date'=>null,

        ], 201 );
    }

}
