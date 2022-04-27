<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book; // これを追加することで、Bookモデルのデータを使用することになる

use Illuminate\Support\Facades\Auth;//ユーザーIDをなんとかする

class BooksController extends Controller
{
    public function index()
    {
        //追加した本の一覧をidの降順で取得(設計中)
        //データを取得するコードが必要となるので、書いておくこと(書いた)
        $books = Book::orderBy('id', 'desc')->paginate(5);
    //   ここに定義する。Bookというモデルからもってきたidを、この順に並べる。最新のやつを五個まで表示。(あってるかわからん)
    
        // ビューでそれを表示する。resources/views/books/index.blade.phpを意味する。
        return view('books.index', [
            // 渡したいデータの配列を指定する。$books = Book::all(); で $books に入ったデータをViewに渡すためである。
            'books' => $books,
        ]);
    }
    
    // 「新規登録画面表示処理」を書いていく。
    public function create()
    {
        // フォームの入力項目のために $book = new Book; でインスタンスを作成している。
        $book = new Book;

        // 本の新規登録ビューを表示
        return view('books.create', [
            'book' => $book,
        ]);
    }
    
     // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
    // メッセージを作成
        $book = new Book;
        $book->title = $request->title;
        $book->memo = $request->memo;
        $book->price = $request->price;
        $book->image = $request->image;
        $book->user_id = Auth::id();
        $book->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    // getでmessages/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        //
    }

    // getでmessages/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        //
    }

    // putまたはpatchでmessages/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        //
    }

    // deleteでmessages/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        //
    }
    
    
}