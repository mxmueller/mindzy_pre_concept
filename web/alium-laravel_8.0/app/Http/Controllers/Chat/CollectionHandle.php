<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionHandle extends Controller
{

    private function MongoDBCollectionSubmit() {
        dd(DB::connection('mongodb')->collection('2132346')
        ->insert(['test' => 'testst']));
    }

    public function submitCollection() {

        $this->MongoDBCollectionSubmit();
    }
}
