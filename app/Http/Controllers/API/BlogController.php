<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use App\Http\Resources\BlogResource;

use App\Model\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{

    public function index(): JsonResponse {
        $blogs = BlogResource::collection ( blog::orderBy( 'created_at', 'desc' )->paginate( 3 ) );
        return response()->json( [
            'success' => true,
            'message' => 'blogs retrieved successfully',
            'data' => $blogs
        ], 200 );
    }

    ///////////////////// Store blogs ///////////////////////

    public function store( Request $request ): JsonResponse {
        $validatedData = $request->validate( [
            'title' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:5|max:2000',


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
            $image->move( public_path( 'blog/img/' ), $imageName );
        }

        $blogs = blog::create( [
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,


        ] );

        return response()->json( [
            'success' => true,
            'message' => 'blogs created successfully',
            'data' => $blogs
        ], 201 );
    }

    ///////////////////// Show Single blogs ///////////////////////

    public function show( $id ): JsonResponse {
        $blogs = blog::find( $id );

        if ( !$blogs ) {
            return response()->json( [ 'success' => false, 'message' => 'blogs not found' ], 404 );
        }

        return response()->json( [
            'success' => true,
            'message' => 'blogs retrieved successfully',
            'data'=>new BlogResource( $blogs ),
        ], 200 );
    }

    ///////////////////// Update blogs ///////////////////////

    public function update( Request $request, $id ): JsonResponse {
        $blogs = blog::find( $id );

        if ( !$blogs ) {
            return response()->json( [ 'success' => false, 'message' => 'blogs not found' ], 404 );
        }

        $validatedData = $request->validate( [
            'title' => 'required|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:5|max:2000',


        ] );
        if ( $validatedData->fails() ) {
            $data = [
                'msg' => 'validation required',
                'status' => 0,
                'data' => $validatedData->errors()
            ];

            return response()->json( $data );
        }
        $imageName = $blogs->image;

        if ( $request->hasFile( 'image' ) ) {
            if ( !empty( $blogs->image ) && File::exists( public_path( 'blog/img/' . $blogs->image ) ) ) {
                File::delete( public_path( 'blog/img/' . $blogs->image ) );
            }
            $image = $request->file( 'image' );
            $imageName = time() . '.' . $image->extension();
            $image->move( public_path( 'blog/img/' ), $imageName );
        }

        $blogs->update( [
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,


        ] );

        return response()->json( [
            'success' => true,
            'message' => 'blogs updated successfully',
            'data'=>new BlogResource( $blogs ),
        ], 200 );
    }

    ///////////////////// Delete blogs ///////////////////////

    public function delete( $id ): JsonResponse {
        $blogs = blog::find( $id );

        if ( !$blogs ) {
            return response()->json( [ 'success' => false, 'message' => 'blogs not found' ], 404 );
        }

        if ( !empty( $blogs->image ) && File::exists( public_path( 'blog/img/' . $blogs->image ) ) ) {
            File::delete( public_path( 'blog/img/' . $blogs->image ) );
        }

        $blogs->delete();

        return response()->json( [
            'success' => true,
            'message' => 'blogs deleted successfully',
            'data'=>new BlogResource( $blogs ),

        ], 200 );
    }
}
