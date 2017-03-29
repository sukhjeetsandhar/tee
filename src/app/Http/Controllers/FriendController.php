<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
    *	Return view of all friend request
    */
    public function showFriendRequests()
    {
    	$user = auth()->user();
    	$friendRequests = $user->getFriendRequests()->load('sender');
    	return view('user.friendrequests', compact('friendRequests', 'user'));
    }

    /**
    *	Accept Friend Request From sender
    */
    public function acceptFriendRequests($sender)
    {
    	$user = auth()->user();
    	$sender = User::find($sender);
    	$user->acceptFriendRequest($sender);
    	return back();
    }

    /**
    *	Return view of all friend request
    */
    public function showFriendList()
    {
    	$friends = auth()->user()->getFriends();
    	return view('user.friends', compact('friends'));
    }

    /**
    *   Return view of all Users
    */
    public function findFriends()
    {
        $CurrentUser = auth()->user();
        $users = User::all()->except($CurrentUser->id); 
        return view('user.findfriends', compact('CurrentUser', 'users'));
    }

    /**
    *   unfriend the given User 
    */
    public function unfriend(User $user)
    {
        auth()->user()->unfriend($user);
        return back();
    }

}