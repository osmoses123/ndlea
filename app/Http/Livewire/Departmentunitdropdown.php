<?php

namespace App\Http\Livewire;

use App\Models\Unit;
use Livewire\Component;
use App\Models\Department;

class Departmentunitdropdown extends Component
{
    public $departments;
    public $units;

    public $SelectedDepartment = NULL; 
    public $SelectedUnit = NULL; 
    public function mount(){

        $this->departments = Department::get();
        $this->units = collect();
    }
    public function render()
    {
        return view('livewire.departmentunitdropdown');
    }

    public function updatedSelectedDepartment($department_id){
        if(!is_null($department_id)){
            $this->units = Unit::where('department_id', $department_id)->get();
        }
    }
}
