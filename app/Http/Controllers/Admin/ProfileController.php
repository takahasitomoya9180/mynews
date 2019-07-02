<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

//以下を追記
use App\ProfileHistory;

use Carbon\Carbon;

class ProfileController extends Controller
{
    
     public function index(Request $request)
    {
      $posts = Profile::all();
        return view('admin.profile.index', ['posts' => $posts ]);
    }
        
    public function add()
  {
      return view('admin.profile.create');
  }

  public function create(Request $request)
  {
      // Varidationを行う
      $this->validate($request, profile::$rules);
      
      $profile = new profile;
      $form = $request->all();
      
      unset($form['_token']);
      
      $profile->fill($form);
      $profile->save();
      
      return redirect('admin/profile/create');
  }
  
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
      
      
      if (empty($profile)) {

          abort(404);
      }
      return view('admin.profile.edit',['profile_form' => $profile]);
  }
  
  public function update(Request $request)
  {
      // validationをかける
      $this->validate($request, Profile::$rules);
      //　Profile Modelからデータを取得する
      $profile = Profile::find($request->id);
      //送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      
      unset($profile_form['_token']);
      
      // 該当するデータを上書きして保存
      $profile->fill($profile_form)->save();
      
      //以下を追記
      $ProfileHistory=new ProfileHistory;
      $ProfileHistory->profile_id=$profile->id;
      $ProfileHistory->edited_at=Carbon::now();
      $ProfileHistory->save();
      
      return redirect('admin/profile');
      
  }
  public function delete(Request $request)
    {
        $profile = Profile::find($request->id);
        
        $profile->delete();
        return redirect('admin/profile/');
        
    }
  
}