<?php

namespace Mawdoo3\Search\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mawdoo3\Search\Model\SavedResult;

class SavedResultController extends Controller
{
    public function index()
    {
        return view('search::search');
    }


    public function save(Request $request)
    {
        //send results which getted from user to database
        $data = $request->input('choose');
        $comment = $request->input('comment');

        for ($i = 0; $i < count($data); $i++) {

            $array[$i] = explode("|,", $data[$i]);

            if(!isset($array[$i][0])){
                $array[$i][0] = null;
            }

            if(!isset($array[$i][2])){
                $array[$i][2] = null;
            }


            SavedResult::create([
                'title' => $array[$i][0],
                'link' => $array[$i][1],
                'description' => $array[$i][2],
                'comment' => $comment[$i]
            ]);
        }
        return redirect(route('search'));
    }

    public function showSavedLinks()
    {
        $data = SavedResult::all();
        return view('search::saved_results', compact('data'));
    }


    public function update(Request $request)
    {
        $id = $request->input('id');
        $comment = $request->input('comment');

        SavedResult::where('id', $id)->update(['comment' => $comment]);
        return redirect(route("show"));
    }

    public function delete(Request $request)
    {
        $id = $request->get('id');
        SavedResult::where('id', $id)->delete();
        return redirect(route("show"));
    }


}
