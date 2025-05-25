<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\TypeFoodRequest;
use App\Model\TypeFood;
use App\Http\Resources\TypeFoodResource;

class TypeFoodsController extends Controller {

    // show all TypeFood function

    public function index(): JsonResponse {
        $TypeFood = TypeFoodResource::collection( TypeFood::orderBy( 'created_at', 'desc' )->paginate( 9 ) );
        return  response()->json( [
            'success'=>true,
            'massage'=>'all TypeFood retrived',
            'date'=>$TypeFood

        ], 201 );
    }

    // show one TypeFood function

    public function show( $id ): JsonResponse {
        $TypeFood = TypeFood::Find( $id ) ;

        if ( !$TypeFood ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' TypeFood is not found',
                'date'=>$TypeFood
            ], 404 );
        }
        return response()->json( [
            'success'=>true,
            'massage'=>' TypeFood is showed',
            'date'=>$TypeFood

        ], 201 );
    }

    // create TypeFood function

    public function Store(TypeFoodRequest  $request ): JsonResponse {


        $TypeFood = TypeFood::create( [
            'name' => $request->name,

        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' TypeFood is created ',
            'date'=>$TypeFood

        ], 201 );
    }

    // updete TypeFood function

    public function update( TypeFoodRequest  $request , $id ): JsonResponse {
        $TypeFood = TypeFood::Find( $id );

        if ( !$TypeFood ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' TypeFood is not found',
                'date'=>$TypeFood
            ], 404 );
        }


        $TypeFood->update( [
            'name' => $request->name,

        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' TypeFood is update ',
            'date'=>$TypeFood

        ], 201 );
    }

    // delete TypeFood function

    public function delete( Request $request, $id ): JsonResponse {
        $TypeFood = TypeFood::Find( $id );

        if ( !$TypeFood ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' TypeFood is not found',
                'date'=>$TypeFood
            ], 404 );
        }
     

        $TypeFood->delete();
        return  response()->json( [
            'success'=>true,
            'massage'=>' TypeFood is deleted ',
            'date'=>null

        ], 201 );
    }
}
