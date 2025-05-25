<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use App\Http\Resources\EventsResource;

use App\Model\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller {
    ///////////////////// Get All Eventss ///////////////////////

    public function index(): JsonResponse {
        $Eventss = EventsResource::collection ( Event::orderBy( 'created_at', 'desc' )->paginate( 3 ) );
        return response()->json( [
            'success' => true,
            'message' => 'Eventss retrieved successfully',
            'data' => $Eventss
        ], 200 );
    }

    ///////////////////// Store Events ///////////////////////

    public function store( Request $request ): JsonResponse {
        $validatedData = $request->validate( [
            'title' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:5|max:2000',
            'date' => 'required',
            'time' => 'required',

        ] );
        if ( $validatedData->fails() ) {
            $data = [
                'msg' => 'validation required',
                'status' => 0,
                'data' => $validatedData->errors()
            ];

            return response()->json( $data );
        }

        $imageName = '';
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $imageName = time() . '.' . $image->extension();
            $image->move( public_path( 'Event/img/' ), $imageName );
        }

        $Events = Event::create( [
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'time' => $request->time,
            'date' => $request->date,

        ] );

        return response()->json( [
            'success' => true,
            'message' => 'Events created successfully',
            'data' => $Events
        ], 201 );
    }

    ///////////////////// Show Single Events ///////////////////////

    public function show( $id ): JsonResponse {
        $Events = Event::find( $id );

        if ( !$Events ) {
            return response()->json( [ 'success' => false, 'message' => 'Events not found' ], 404 );
        }

        return response()->json( [
            'success' => true,
            'message' => 'Events retrieved successfully',
            'data'=>new EventsResource( $Events ),
        ], 200 );
    }

    ///////////////////// Update Events ///////////////////////

    public function update( Request $request, $id ): JsonResponse {
        $Events = Event::find( $id );

        if ( !$Events ) {
            return response()->json( [ 'success' => false, 'message' => 'Events not found' ], 404 );
        }

        $validatedData = $request->validate( [
            'title' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:5|max:2000',
            'date' => 'required',
            'time' => 'required',

        ] );
        if ( $validatedData->fails() ) {
            $data = [
                'msg' => 'validation required',
                'status' => 0,
                'data' => $validatedData->errors()
            ];

            return response()->json( $data );
        }
        $imageName = $Events->image;

        if ( $request->hasFile( 'image' ) ) {
            if ( !empty( $Events->image ) && File::exists( public_path( 'Event/img/' . $Events->image ) ) ) {
                File::delete( public_path( 'Event/img/' . $Events->image ) );
            }
            $image = $request->file( 'image' );
            $imageName = time() . '.' . $image->extension();
            $image->move( public_path( 'Event/img/' ), $imageName );
        }

        $Events->update( [
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'time' => $request->time,
            'date' => $request->date,

        ] );

        return response()->json( [
            'success' => true,
            'message' => 'Events updated successfully',
            'data'=>new EventsResource( $Events ),
        ], 200 );
    }

    ///////////////////// Delete Events ///////////////////////

    public function delete( $id ): JsonResponse {
        $Events = Event::find( $id );

        if ( !$Events ) {
            return response()->json( [ 'success' => false, 'message' => 'Events not found' ], 404 );
        }

        if ( !empty( $Events->image ) && File::exists( public_path( 'Event/img/' . $Events->image ) ) ) {
            File::delete( public_path( 'Event/img/' . $Events->image ) );
        }

        $Events->delete();

        return response()->json( [
            'success' => true,
            'message' => 'Events deleted successfully',
            'data'=>new EventsResource( $Events ),

        ], 200 );
    }
}
