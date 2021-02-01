<div class="row">
  <div class="col-md-12">
      <label> Courses offer in Quito and Otavalo</label>
      <table class="table text-center">
        <thead>
          <tr>
            <th>
              #
            </th>
            <th>
              Course
            </th>
            <th>
              Options
            </th>
            <th>
              Weeks
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <input type="checkbox" id="groupClasses" class="courseSelect" name="groupCourses" value="Group Classes" />
            </td>
            <td>
              <label for="groupClasses"> Group Classes</label>
            </td>
            <td>
              <select id="optionsGroupClasses" class="hours" name="optionsGroupClasses" disabled="true" date-message=" You forgot to select option">
                <option value="">---</option>
                <option value="1"> 20 hours per week</option>
              </select>
            </td>
            <td>
                @include('form.select', 
                ['name'    => 'weeksGroupClasses', 
                'max'      => 25,
                'disabled' => true,
                'message'  => 'You forgot to select weeks',
                'class'    => 'weeksClass'])
            </td>
          </tr>
          <tr>
            <td>
                <input type="checkbox" id="privateCourses" class="courseSelect" name="privateCourses" value="Private Courses" /> 
            </td>
            <td>
              <label for="privateCourses"> Private Courses </label>
            </td>
            <td>
              <select id="optionsPrivateCourses" class="hours" name="optionsPrivateCourses" disabled="true" date-message=" You forgot to select option">
                <option value="">---</option>
                <option value="1"> 20 hours per week</option>
                <option value="2"> 25 hours per week</option>
                <option value="3"> 30 hours per week</option>
                <option value="4"> 35 hours per week</option>
              </select>
            </td>
            <td>
                @include('form.select', 
                ['name'    => 'weeksPrivateCourses', 
                'max'      => 25,
                'disabled' => true,
                'message'  => 'You forgot to select weeks',
                'class'    => 'weeksClass'])
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" id="combinedCourse" class="courseSelect" name="combinedCourse" value="Combined Course" />
            </td>
            <td>
              <label for="combinedCourse"> Combined Course </label>
            </td>
            <td>
              <select id="optionsCombinedCourse" class="hours" name="optionsCombinedCourse" disabled="true" date-message=" You forgot to select option">
                <option value="">---</option>
                <option value="1"> 20 + 10 hours per week </option>
                <option value="2"> 20 + 15 hours per week</option>
              </select>
            </td>
            <td>
                @include('form.select', 
                ['name'    => 'weeksCombinedCourse', 
                'max'      => 25,
                'disabled' => true,
                'message'  => 'You forgot to select weeks',
                'class'    => 'weeksClass'])
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" id="semiPrivate" class="courseSelect" name="semiPrivate" value="Semi-Private" />
            </td>
            <td>
              <label for="semiPrivate"> Semi-Private </label>
            </td>
            <td>
              <select id="optionsSemiPrivate" class="hours" name="optionsSemiPrivate" disabled="true" date-message="You forgot to select option" >
                <option value="">---</option>
                <option value="1"> 20 hours per week </option>
                <option value="2"> 25 hours per week</option>
                <option value="3"> 30 hours per week</option>
                <option value="4"> 35 hours per week</option>
              </select>
            </td>
            <td>
                @include('form.select', 
                ['name'    => 'weeksSemiPrivate', 
                'max'      => 25,
                'disabled' => true,
                'message'  => 'You forgot to select weeks',
                'class'    => 'weeksClass'])
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" id="spanishMedicine" class="courseSelect" name="spanishMedicine" value="Spanish for Medicine" />
            </td>
            <td>
              <label for="spanishMedicine"> Spanish for Medicine </label>
            </td>
            <td>
              <select id="optionsSpanishMedicine" class="hours" name="optionsSpanishMedicine" disabled="true" date-message=" You forgot to select option">
                <option value="">---</option>
                <option value="1"> 20 hours per week </option>\
              </select>
            </td>
            <td>
                @include('form.select', 
                ['name'    => 'weeksSpanishMedicine', 
                'max'      => 25,
                'disabled' => true,
                'message'  => 'You forgot to select weeks',
                'class'    => 'weeksClass'])
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" id="deleExam" class="courseSelect" name="deleExam" value="DELE Exam Preparation" />
            </td>
            <td>
              <label for="deleExam"> DELE Exam Preparation</label>
            </td>
            <td>
              <select id="optionsDeleExam" class="hours" name="optionsDeleExam" disabled="true" date-message=" You forgot to select option">
                <option value="">---</option>
                <option value="1"> 20 hours per week </option>\
              </select>
            </td>
            <td>
                @include('form.select', 
                ['name'    => 'weeksDeleExam', 
                'max'      => 25,
                'disabled' => true,
                'message'  => 'You forgot to select weeks',
                'class'    => 'weeksClass'])
            </td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" id="spanishProfessionals" class="courseSelect" name="spanishProfessionals" value="Spanish for Professionals" />
            </td>
            <td>
              <label for="spanishProfessionals"> Spanish for Professionals </label>
            </td>
            <td>
              <select id="optionsSpanishProfessionals" class="hours" name="optionsSpanishProfessionals" disabled="true" date-message=" You forgot to select option">
                <option value="">---</option>
                <option value="1"> 20 hours per week </option>
              </select>
            </td>
            <td>
                @include('form.select', 
                ['name'    => 'weeksSpanishProfessionals', 
                'max'      => 25,
                'disabled' => true,
                'message'  => 'You forgot to select weeks',
                'class'    => 'weeksClass'])
            </td>
          </tr>
        </tbody>
      </table>
  </div>  
</div>  
  
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="commentsLocations">Comments</label>
        <textarea class="form-control" id="commentsLocations" placeholder="Comments" name="commentsLocations"></textarea>
      </div>
    </div>
  </div> 