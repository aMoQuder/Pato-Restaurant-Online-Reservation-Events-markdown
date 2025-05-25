<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookTableRequest;
use App\Model\BookTable;
use Illuminate\Http\Request;

class BookTableController extends Controller {
    public function store( BookTableRequest $request ) {
        $book = BookTable::all();
        $user_id = auth()->user()->id;

        foreach ( $book as $item ) {
            if ( $item->Num_peaple == $request->Num_peaple && $item->book_id == $user_id ) {
                return redirect()->back()->with( 'massegeError', "you booked this table  please
                  wait manger of restuarant" );
            }
        }
        $bookid = $request->book_id;
        BookTable::create( [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'Num_peaple' => $request->Num_peaple,
            'date' => $request->date,
            'time' => $request->time,
            'book_id' => $bookid,

        ] );
        return redirect()->back()->with( 'massege', 'you are booking your table so  we look for you ' );
    }

    public function show( $id ) {

        $bookTab = BookTable::FindOrfail( $id );
        if ( $bookTab->status == 'sent' ) {
            return view( 'bookTable.show', [ 'bookTable' => $bookTab ] );
        }
        $bookTab->status = 'showed';
        $bookTab->save();
        return view( 'bookTable.show', [ 'bookTable' => $bookTab ] );
    }

    public function looking( $id ) {

        $book = BookTable::FindOrfail( $id );
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

    public function delet( $id ) {
        $bookTab = BookTable::FindOrfail( $id );
        $bookTab->delete();
        return redirect()->route( 'allBook' )->with( 'delete', 'success one Book Table deleted' );
    }

    public function all() {

        $bookTables = BookTable::all();
        return view( 'bookTable.all', [ 'bookTables' => $bookTables ] );
    }

    public function index() {
        return view( 'reservation' );
    }
}

