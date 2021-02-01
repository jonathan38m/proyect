<?php

namespace App\Http\Controllers;

use App\Course;
use App\Location;
use App\Http\Requests\CourseBookingForm;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    
    /**
     * Validate the options from a courses[] selected
     *
     * @param \App\Http\Requests\SelectCourse $request
     * @return  \App\Course []
     */
    public function validateCourses(CourseBookingForm $request)
    {
        return response()->json(['message' => true]);
    }

    /**
     * Return the options from a courses[] selected
     *
     * @param \App\Http\Requests\SelectCourse $request
     * @return  \App\Course []
     */
    public function coursesOptions(CourseBookingForm $request)
    {
        $courses =$request->courses;

        foreach ($courses as $key => $course) {

            $course = Course::find($course);
            $course->location;
            $course->options;
            $courses[$key] = $course;

        }
        return $courses;
    }



}
