<?php

namespace App\Livewire;

use App\Models\Field;
use App\Models\Project;
use Livewire\Component;

class Workspace extends Component
{
    public $project;
    public $f;
    public function addField($type)
    {
        $arr= [];
        switch ($type){
            case 'paragraph':
            case 'text':
                $arr = [
                    'type' => $type,
                    'value' => 'Title of the '.$type.' field',
                    'placeholder' => 'Placeholder of the '.$type.' field',
                    'project_id' => $this->project->id,
                ];
                break;

            case 'heading':
                $arr = [
                    'type' => $type,
                    'value' => $type.' field',
                    'project_id' => $this->project->id,
                ];
                break;
            case 'dropdown':
                $arr = [
                    'type' => $type,
                    'value' => 'Title of the '.$type.' field',
                    'placeholder' => serialize(['first option']),
                    'project_id' => $this->project->id,
                ];
                break;
            case 'radio':
                $arr = [
                    'type' => $type,
                    'value' => 'Title of the '.$type.' field',
                    'placeholder' => 'name',
                    'project_id' => $this->project->id,
                ];
                break;
            case 'check':
                $arr = [
                    'type' => $type,
                    'value' => 'Title of the '.$type.' field',
                    'project_id' => $this->project->id,
                ];
                break;
        }
        $field = Field::create($arr);
    }
    public function showEdit($id)
    {
        foreach ($this->project->fields as $field){
            if ($field->id == $id){
                $this->f = $field;
                break;
            }
        }
    }
    public function updateField($index,$value)
    {
       Field::whereId($this->f->id)->update([$index=>$value]);
       $this->f->$index = $value;
    }
    public function updateFieldDropdown($key = 'null',$text = '')
    {
        $arr = unserialize($this->f->placeholder);

       if ($key == 'null') $arr[] = 'new option';
       else if ($key == 'delete') unset($arr[$text]);
       else $arr[$key] = $text;

        Field::whereId($this->f->id)->update(['placeholder' => serialize($arr)]);
        $this->f->placeholder = serialize($arr);
    }
    public function deleteField($id)
    {
        Field::whereId($id)->delete();
        foreach ($this->project->fields as $key => $field){
            if ($field->id == $id){
                unset($this->project[$key]);
                break;
            }
        }
    }
    public function mount($id)
    {
        $this->project = Project::whereId($id)->with('fields','workspace')->first();
    }
    public function render()
    {
        return view('livewire.workspace');
    }
}
