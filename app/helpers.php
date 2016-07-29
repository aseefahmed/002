<?php

function getNotifications()
{
   $notifications = DB::table('notifications')->where('user_id', Auth::user()->id)->where('clicked',0)->orderBy('created_at', 'desc')->get();
    
   return $notifications;
}