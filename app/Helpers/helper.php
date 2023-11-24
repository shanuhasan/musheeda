<?php

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


function getStaticPages()
{
    $page = Page::where([
        'is_active'=>1,
        'is_deleted'=>0,
    ])->orderBy('name','ASC')->get();

    return $page;
}
