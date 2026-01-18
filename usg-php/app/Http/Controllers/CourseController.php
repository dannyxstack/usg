<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller {

    public function index() {
        $courses = Course::all();
        $title = 'All Courses';
        return view('allcourses', compact(
            'courses',
            'title'
        ));
    }

    public function colleges() {
        $courses = Course::all();
        $title = 'Our Colleges';
        return view('colleges', compact(
            'courses',
            'title'
        ));
    }

    /**
     * Summary of show detail
     * @param mixed $code
     * @return \Illuminate\Contracts\View\View
     */
    public function detail($code) {
        // 根据代码查找课程
        $course = Course::where('code', $code)->firstOrFail();
        if (empty($course)) {
            abort(404, 'Course not found');
        }

        // 分离 Core 和 Elective Units
        // $coreUnits = $course->units->where('type', 'core');
        // $electiveUnits = $course->units->where('type', 'elective');
        $coreUnits = [];
        $electiveUnits = [];
        if (!is_array($course->course_structure)) {
            $course->course_structure = json_decode($course->course_structure, true);
        }
        if (!is_array($course->course_fees)) {
            $course->course_fees = json_decode($course->course_fees, true);
        }
        if (!empty($course->course_structure)) {
            foreach ($course->course_structure as $unit) {
                if (strtolower($unit['type']) === 'core') {
                    $coreUnits[] = $unit;
                } elseif (strtolower($unit['type']) === 'elective') {
                    $electiveUnits[] = $unit;
                }
            }
        }

        // get random 4 courses
        $courses = Course::all()->toArray();
        shuffle($courses);
        $randomCourses1 = array_splice($courses, 0, 4);
        $randomCourses2 = array_slice($courses, 4, 4);
        $randomCourses3 = array_slice($courses, 8, 4);
        $randomCourses4 = array_slice($courses, 12, 4);

        $title = $course->code . ' - ' . $course->name;

        // print_r($coreUnits);exit;

        return view('course-detail', compact(
            'course',
            'coreUnits', 
            'electiveUnits', 
            'randomCourses1',
            'randomCourses2',
            'randomCourses3',
            'randomCourses4',

            'title'
        ));
    }
}