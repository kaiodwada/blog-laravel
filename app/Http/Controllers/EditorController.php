<?php
//<a href="https://www.freepik.com/free-vector/happy-people-avatars_7085154.htm#query=avatar&position=1&from_view=search">Image by pikisuperstar</a> on Freepik

namespace App\Http\Controllers;

use App\Http\Requests\AdminEditRequest;
use App\Http\Requests\StoreEditorRequest;
use App\Models\Editor;
use Illuminate\Http\Request;


class EditorController extends Controller
{

    public function index()
    {
        $editor = Editor::paginate(10);
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

        if (empty($input['image'])) {
            $rand = rand(1,4);
            $gender = array("m" => "0", "w" => "1");
            $sort = array_rand($gender, 1);
            if ($input['gender'] === 'masculino') {
                $collection = "public/default/m-".$rand.".png";
            }elseif($input['gender'] === 'feminino'){
                $collection = "public/default/w-".$rand.".png";
            }else{
                $collection = "public/default/".$sort."-".$rand.".png";
            }
            $input['image'] = $collection;

        }else{
            if ($input['image']->isValid()) {
                $file = $input['image'];
                $path = $file->store('public/avatar/');
                $input['image'] = $path;
            }
        }

        Editor::create($input);
        return redirect()->route('editors-create');
    }

    public function edit(Editor $editor)
    {
        return view('dashboard.editors-edit', [
            'editor' => $editor,
        ]);
    }

    public function update(Editor $editor, AdminEditRequest $request)
    {
        $input = $request->validated();
        $editor->fill($input);
        $editor->save();
        return redirect()->route('editors-index');
    }

    public function changeStatus(Editor $editor, StoreEditorRequest $request)
    {
        $input = $request->validated();

        if ($input['status'] == 0) {
            $input['status'] = 1;
        }else{
            $input['status'] = 0;
        }

        $editor->fill($input);
        $editor->update();
        return redirect()->route('editors-index');
    }

    public function status(Request $request)
    {
        dd($request->request);
    }
}
