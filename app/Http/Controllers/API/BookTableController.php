<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\BookTableRequest;
use App\Model\BookTable;
use App\Http\Resources\BookTableResource;

class BookTableController extends Controller {
    // show all BookTable function

    public function index(): JsonResponse {
        $BookTable = BookTableResource::collection( BookTable::orderBy( 'created_at', 'desc' )->paginate( 9 ) );
        return  response()->json( [
            'success'=>true,
            'massage'=>'all  of Booking of Tables  are retrived',
            'date'=>$BookTable

        ], 201 );
    }
    //  BookTable function

    public function BookTable( BookTableRequest $request ) {

        //make sure he book before that
        $book = BookTable::all();
        $user_id = auth()->user()->id;
        foreach ( $book as $item ) {
            if ( $item->email == $request->email && $item->book_id == $user_id ) {
                return response()->json( [
                    'success'=>false,
                    'massage'=>'you are booking your table so  we look for you ',
                    'date'=>null
                ], 404 );
            }
        }

        //create BookTable
        $BookTable =  BookTable::create( [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'book_id' => $user_id,
            'Num_peaple' => $request->Num_peaple,
            'date' => $request->date,
            'time' => $request->time,


        ] );

        return response()->json( [
            'success'=>true,
            'massage'=>'you are booking your table so  we look for you  ',
            'date'=>new BookTableResource( $BookTable )
        ], 404 );

    }

    public function sent( $id ) {
        $book = BookTable::FindOrfail( $id );

        if ( !$book ) {
            return response()->json( [
                'success'=>false,
                'massage'=>'this Booking is not found',
                'date'=>null
            ], 404 );
        }

        $book->status = 'sent';
        $book->save();

        // 2. تجهيز رقم الهاتف بصيغة واتساب الصحيحة
        $rawPhone = $book->phone;
        $cleanedPhone = ltrim( $rawPhone, '0' );
        // حذف الصفر الأول فقط
        $phone = '20' . $cleanedPhone;
        // غيّر '20' حسب كود دولتك

        $message =  "Mr: {{ $book->name }}, you has booked one table for
                                        {{ $book->Num_peaple }}
                                        in {{ $book->date }} day at {{ $book->time }} on our web site
                                        so your book has been made sure and we look for you in in {{ $book->date }}
                                        day at {{ $book->time }}
                                        ane we thank you to choice us.";
        // تنسيق الرسالة لتكون صالحة في URL
        $message = urlencode( $message );

        // توليد الرابط
        $link = "https://api.whatsapp.com/send?phone={$phone}&text={$message}";

        // إعادة توجيه المستخدم إلى رابط واتساب
        return redirect()->away( $link );
    }


    public function show( $id ) {
        $book = BookTable::FindOrfail( $id );

        if ( !$book ) {
            return response()->json( [
                'success'=>false,
                'massage'=>'this BookTable is not found',
                'date'=>null
            ], 404 );
        }
        if ( $book->status == 'sent' ) {
            $book->status = 'sent';
        } else {
            $book->status = 'showed';
        }
        $book->save();
        return response()->json( [
            'success'=>true,
            'massage'=>' booking is showed',
            'date'=>new BookTableResource( $book )

        ], 201 );
    }


    public function delete(Request $request, $id ) {
        $book = BookTable::FindOrfail( $id );

        if ( !$book ) {
            return response()->json( [
                'success'=>false,
                'massage'=>'this Booking is not found',
                'date'=>null
            ], 404 );
        }

        $book->delete();
        return response()->json( [
            'success'=>true,
            'massage'=>'this Booking is deleted',
            'date'=>null
        ], 201 );
    }
}
