<?php

namespace App\Http\Controllers\CompanyAdmin;

use App\Http\Controllers\Controller;
use App\Project;
use App\Category;
use App\ProjectImage;
use Illuminate\Http\Request;
use Uuid;
use Illuminate\Support\Facades\File as LaraFile;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd();
        if(session('COPMANY'))
        {
            return view('CompanyAdmin.projectindex', ['data' => session('COPMANY')->projects()->paginate(3)]);
        }//getting projects for session user company
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all()->pluck('name', 'id')->toArray();
        // dd($categories);
        return view('CompanyAdmin.projectformadd', ['category' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();

        if ($files = $request->file('mainimage')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('mainimage')->getClientOriginalExtension();
            $desti = 'projectimages/';
            $files->move($desti, $path);
            $req['mainimage'] = $path;
            // dd('dd');
        }

        $project = Project::create($req);
        //
        // dd($project);
        return redirect(route('company.project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // dd(Category::all()->pluck('name','id')->toArray());
        return view('CompanyAdmin.projectformedit', ['data' => $project, 'category' => Category::all()->pluck('name', 'id')->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        // $categories = Category::all()->pluck('name','id')->toArray();

        // dd($project,'s');

        $req = $request->all();

        if ($files = $request->file('mainimage')) {
            LaraFile::delete("projectimages/{$project->mainimage}");
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('mainimage')->getClientOriginalExtension();
            $desti = 'projectimages/';
            $files->move($desti, $path);
            $req['mainimage'] = $path;
            // dd('dd');
        }

        $project = $project->update($req);
        //
        // dd($project);
        return redirect(route('company.project.index'));

        // //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        // dd($project);
        return redirect(route('company.project.index'));
    }
}
