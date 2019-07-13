{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'my profile')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>my profile</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if(count($errors) >0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                        </div>
                    </div>
                   <div>
                    <div class="form-group row">
                        <label class="checkbox-inline" for="gender">性別</label>
                        <div class="col-md-10">
                           <input type="text" class="form-control" name="gender" value="{{ old("gender") }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <lavel class="col-md-2" for="hobby">趣味</lavel>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby')}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <lavel class="col-md-2" for="introduction">自己紹介</lavel>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction"　rows="20">{{ old('introduction') }}</textarea>
                            </div>
                            {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input type="submit" class="btn btn-primary btn-block" value="送信">
                            
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection