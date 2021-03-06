@extends('layouts.app')

@section('content')
    <div class="bg">
        <div class ="glass">
        <h1>ログイン</h1>
    

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワードを入力してください') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">新規登録がお済でない方は {!! link_to_route('signup.get', 'こちら') !!}</p>
        </div>
    </div>
    </div>
    </div>
@endsection