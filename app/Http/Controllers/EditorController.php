<?php
//<a href="https://www.freepik.com/free-vector/happy-people-avatars_7085154.htm#query=avatar&position=1&from_view=search">Image by pikisuperstar</a> on Freepik

namespace App\Http\Controllers;

use App\Http\Requests\StoreEditorRequest;
use App\Models\Editor;

class EditorController extends Controller
{

    public function index()
    {
        $editor = Editor::paginate();
        return view('dashboard.editors', [
            'editors' => $editor
        ]);
    }

    public function create()
    {
        return view('dashboard.create-editors');
    }

    public function store(StoreEditorRequest $request)
    {
        $input = $request->validated();
        Editor::create($input);
        return redirect()->route('editors-create');
    }

    public function edit()
    {

    }
}
