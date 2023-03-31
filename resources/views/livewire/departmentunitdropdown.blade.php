<div>
    <div class="form-group">
        <label for="category_id">Select Department</label>
      <select wire:model="SelectedDepartment" class="form-control select2" name="department_id">
      <option selected >Select Department</option>
        @foreach ($departments as $department)
        <option value="{{$department->id}}">{{$department->department_name}}</option> 
        @endforeach
        
       
      </select>
    </div>
   
    <div class="col-md-12 form-group">
        <div class="secti on-title">Select Unit</div>
      <select class="form-control select2">
        <option>Select Unit</option>
        @foreach ($units as $unit)
        <option value="{{$unit->id}}">{{$unit->unit_name}}</option> 
        @endforeach
        
      </select>
    </div>

</div>
