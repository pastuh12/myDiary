<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * этот контроллер выводит view для ежедневных мыслей
     */
    public function dailyThoughts()
    {
        return view('dailyThoughts');
    }

    public function goals()
    {
        return view('goals');
    }

    public function ideas()
    {
        return view('ideas');
    }
}
