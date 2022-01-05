<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RelationShip_one_to_many extends Controller
{
    public function posts() {
        
            //posts 

              $posts = Post::with('categories')->get();
              $category = category::all();
              dd($category);
        //       dd($posts->categories);
             return  view('post',["posts"=> $posts , "category"=> $category]);

          
    }
    public function categories() {
        
           
            // category 

            $category = category::find(1);
            $post = $category->post;
 
            dd($post);
    }
    public function many_to_many() {
        
           
            // role 
            $role = Role::find(1);
            // user 
            $user = User::find(1);	

            $user_role = $user->roles ;
            $role_user = $role->users ;	
            return  view('role',["role_user"=> $role_user , "user_role" => $user_role]);

           
 
            
    }
}
