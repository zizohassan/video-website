<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Comments;
use App\Models\User;

class Home extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function index(){
        $comments = Comments::with('user' , 'video')->orderby('id' , 'desc')->paginate(20);
        return view('back-end.home' , compact('comments'));
    }
}
