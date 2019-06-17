{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
@section('title', 'my profile')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My profile</h2>
                <form action"{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-date">
                    @if (count($errors) >0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach    
                        </ul>
                    @endif
                    <div class="form-group row">
                        <lavel class="col-md-2" for="name">氏名</lavel>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                    </div>    
                  </div>
                  <div class="form-group row">
                      <lavel class="col-md-2" for="gender">性別</lavel>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="gender" value="{{ $profile_form->gender }}">
                    </div>  
                  </div>
                  <div class="form-group row">
                      <lavel class="col-md-2" for="hobby">趣味</lavel>
                  <div class="col-md-2">
                      <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                  </div>  
                 </div>
                 <div class="form-group row">
                     <lavel class="col-md-2" for="introduction">自己紹介</lavel>
                     <div class="col-md-10">
                         <textarea class="form-control" name="introduction" rows="20">{{ $profile_form->introduction }}</textarea>
                     </div>
                 </div>
                </form>
            </div>
        </div>
    </div>
@endsection