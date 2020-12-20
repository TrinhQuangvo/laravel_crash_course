<?php

namespace App\Repositories;

use App\Models\Post; 

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::paginate(20);
    }

    public function destroy($id)
    {
        $result = Post::find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }

    public function update($id){
        
    }
}
