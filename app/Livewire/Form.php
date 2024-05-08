<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Submit;
use Livewire\Component;

class Form extends Component
{
    public $project;
    public $arr = [];
    public $error = [];
    public function mount($id)
    {
        $this->project = Project::whereId($id)->with('fields')->first();
        foreach ($this->project->fields as $field)
            if ($field->type != 'heading')
                $this->arr[$field->id] = '';
    }
    public function submitForm()
    {
        $this->reset('error');
        $submits = Submit::where('project_id',$this->project->id)->get();
        foreach ($this->project->fields as $field){
            if ($field->type == 'heading') continue;
            $value = $this->arr[$field->id];
            if ($field->min != 0 and $field->max != 0)
                if (strlen($value) >= $field->max || strlen($value) <= $field->min)
                    $this->error[$field->id] = 'This '.$field->value.' should be between '.$field->min.' and '.$field->max.' characters';

            if ($field->unique and $submits)
                foreach ($submits as $submit)
                    if ($value == unserialize($submit->fields)[$field->id])
                        $this->error[$field->id] = 'this '.$field->value.' has selected before.';

            if ($field->required and $value=='') $this->error[$field->id] = $field->value.' field is required.';


        }
        if (count($this->error) == 0){
            Submit::create([
                'project_id' => $this->project->id,
                'fields' => serialize($this->arr),
            ]);
        }
    }
    public function render()
    {
        return view('livewire.form');
    }
}
