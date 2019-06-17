<?php

namespace Mawdoo3\Search\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mawdoo3\Search\Model\SavedResult;
use function MongoDB\BSON\fromJSON;

class SearchController extends Controller
{

    function search()
    {
        return view('search::search');
    }

    function getResults($q){
        $query = $q;
        $config =['api'=> "key=".config("search.api"),'cx'=> "cx=".config("search.cx")];
        $results = file_get_contents("https://www.googleapis.com/customsearch/v1/siterestrict?".$config['api'].'&'.$config['cx'].'&q='.$query);
        return $results;
    }
}

