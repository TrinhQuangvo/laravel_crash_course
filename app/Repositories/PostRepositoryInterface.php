<?php 

namespace App\Repositories;

interface PostRepositoryInterface{
    public function all();
    public function destroy($id);
    public function update($id);
}