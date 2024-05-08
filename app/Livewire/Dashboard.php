<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $workspaces;
    public $user;
    public function addWorkspace()
    {
        $workspace = \App\Models\Workspace::create([
            'title' => 'workspace',
            'user_id' => $this->user->id,
        ]);
        $this->workspaces->push($workspace);
    }
    public function changeActive($id)
    {
        \App\Models\Workspace::where('active',1)->update(['active'=>0]);
        \App\Models\Workspace::whereId($id)->update(['active'=>1]);
        foreach ($this->workspaces as $key => $workspace){
            if ($workspace->id == $id)
                $this->workspaces[$key]->active = 1;
             else $this->workspaces[$key]->active = 0;
        }
    }
    public function changeTitle($id,$title)
    {
        \App\Models\Workspace::whereId($id)->update(['title'=>$title]);
        foreach ($this->workspaces as $key => $workspace){
            if ($workspace->id == $id) {
                $this->workspaces[$key]->title = $title;
                break;
            }
        }
    }
    public function addProject($id)
    {
        $num = 0;
        $k = 0;
        foreach ($this->workspaces as $key => $workspace){
            if ($workspace->id == $id) {
                $num = count($workspace->projects);
                $k = $key;
                break;
            }
        }
        $project = Project::create([
            'title' => 'Untitled'.$num+1,
            'user_id' => $this->user->id,
            'workspace_id' => $id,
        ]);
        $this->workspaces[$k]->projects->push($project);
    }
    public function deleteWorkspace($id)
    {
        \App\Models\Workspace::whereId($id)->delete();
        foreach ($this->workspaces as $key => $workspace){
            if ($workspace->id == $id) {
                unset($this->workspaces[$key]);
                break;
            }
        }
    }
    public function deleteProject($id)
    {
        Project::whereId($id)->delete();
    }
    public function RenameProject($id,$title)
    {
        Project::whereId($id)->update(['title' => $title]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/home');
    }
    public function mount()
    {
        $this->user = $user = auth()->user();
        $this->workspaces = \App\Models\Workspace::where('user_id',$user->id)->with('projects.submits')->get();
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
