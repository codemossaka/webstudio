<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Pages extends Model
{
    public function getById($id){
        return DB::table('pages')->where('id',$id)->first();
    }
    public function getAll(){

    }

    public function updatePage($id, $data){
        return DB::table('pages')->where('id', $id)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'url' => $data['url'],
            'content' => $data['content']
        ]);
    }
    public function savePage($data){
        return DB::table('pages')->insert([
            'title' => $data['title'],
            'description' => $data['description'],
            'url' => $data['url'],
            'content' => $data['content']
        ]);
    }

}
