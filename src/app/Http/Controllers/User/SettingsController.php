<?php

namespace App\Http\Controllers\User;

use Cookie;
use Session;
use App\User;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $setting = Setting::findOrFail($id);

        return view('setting.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $setting = auth()->user()->settings;

        return view('setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            "can_view_posts" => "required",
            "can_view_friends" => "required",
            "can_send_request" => "required",
            "can_send_message" => "required",
            "lang" => "required"
        ]);
        
        $requestData = $request->all();
        
        $setting = auth()->user()->settings;
        $setting->update($requestData);
        auth()->user()->update([
            'lang' => $requestData['lang'] 
        ]);

        alert()->success('Setting updated!');

        Cookie::queue('lang', $requestData['lang'] , 2628000);
        return redirect('/settings');
    }

    public function online()
    {
    	auth()->user()->update(['online' => true]);
		return 'success';    	
    }

    public function offline()
    {
    	auth()->user()->update(['online' => false]);
		return 'success';    	
    }

    public function updateLastActivity()
    {
        auth()->user()->update(['last_activity' => Carbon::now()]);
        return auth()->user();
    }
}
