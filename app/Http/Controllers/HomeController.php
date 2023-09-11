<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        return view('home.index',
    );
    }
    public function dash()
    {
      
        return view('home.home',
    );
    }
  public function actionplan()
    {
      
        return view('home.action-plan',
    );
    }
    public function actionprogress()
        {
        
            return view('home.action-progress',
        );
        }
        public function todolist()
        {
        
            return view('home.todo-list',
        );
        }
        public function todoprogress()
        {
        
            return view('home.todo-progress',
        );
        }
        public function projectUpload()
        {
        
            return view('home.project-upload',
        );
        }
        public function projectProgress()
        {
        
            return view('home.project-progress',
        );
        }
        public function projectList()
        {
        
            return view('home.project-list',
        );
        }
        public function project()
        {
        
            return view('home.project',
        );
        }
        public function projectDetail()
        {
        
            return view('home.project-detail',
        );

        }
        public function workProgress()
        {
        
            return view('home.work-progress',
        );
        }
        public function dashboard()
        {
        
            return view('home.dashboard ',
        );
        }
        public function office()
        {
        
            return view('home.office',
        );
        }

     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
