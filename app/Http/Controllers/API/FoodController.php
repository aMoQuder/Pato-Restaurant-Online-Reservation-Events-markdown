<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\FoodRequest;
use App\Model\Food;
use App\Http\Resources\FoodResource;

class FoodController extends Controller {

    // show all Food function

    public function index(): JsonResponse {
        $Food = FoodResource::collection( Food::orderBy('created_at', 'desc')->paginate(9));
        return  response()->json( [
            'success'=>true,
            'massage'=>'all Foods retrived',
            'date'=>$Food

        ], 201 );
    }

    // show one Food function

    public function show( $id ): JsonResponse {
        $Food = Food::Find( $id ) ;

        if ( !$Food ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Food is not found',
                'date'=>$Food
            ], 404 );
        }
        return response()->json( [
            'success'=>true,
            'massage'=>' Food is showed',
            'date'=>new FoodResource( $Food)

        ], 201 );
    }

    // create Food function

    public function Store( FoodRequest $request ): JsonResponse {
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->image;
            $imageName = rand( 1, 1000 ) . time() . '.' . $image->extension();
            $image->move( public_path( 'food/img/' ), $imageName );
        }

        $Food = Food::create( [
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
            'description' => $request->description,
            'type_id' => $request->type_id,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' Food is created ',
            'date'=>new FoodResource( $Food)

        ], 201 );
    }

    // updete Food function

    public function update( FoodRequest $request, $id ): JsonResponse {
        $Food = Food::Find( $id );

        if ( !$Food ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Food is not found',
                'date'=>$Food
            ], 404 );
        }
        if ( $request->hasFile( 'image' ) ) {
            if ( File::exists( public_path( 'food/img/' . $Foods->image ) ) ) {
                File::delete( public_path( 'food/img/' . $Foods->image ) );
            }
            ;
            $image = $request->image;
            $imageName = rand( 1, 1000 ) . time().'.'.$image->extension();
            $image->move( public_path( 'food/img/' ), $imageName1 );
        }


        $Food->update( [
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
            'description' => $request->description,

            'type_id' => $request->type_id,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' Food is update ',
            'date'=>new FoodResource( $Food)

        ], 201 );
    }

    // delete Food function

    public function delete(Request $request, $id ): JsonResponse {
        $Food = Food::Find( $id );

        if ( !$Food ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Food is not found',
                'date'=>$Food
            ], 404 );
        }
        // delete image by using library file exist
        if ( !empty ( $Foods->image ) && File::exists( public_path( 'food/img/' . $Foods->image ) ) ) {
            File::delete( public_path( 'food/img/' . $Foods->image ) );
        }
        ;


        $Food->delete();
        return  response()->json( [
            'success'=>true,
            'massage'=>' Food is deleted ',
            'date'=>null

        ], 201 );
    }
}

