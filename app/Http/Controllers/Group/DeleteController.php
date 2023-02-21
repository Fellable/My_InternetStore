<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
   public function __invoke(Group $group)
   {
       $group->delete();
       return redirect()->route('group.index');
   }
}
