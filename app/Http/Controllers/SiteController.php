<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Company;
use App\Models\Course;
use App\Models\CourseHead;
use App\Models\Faq;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Logo;
use App\Models\MessageHead;
use App\Models\Navbar;

use App\Models\NewCourse;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $nav = Navbar::all();
        $header = Header::all();
        $about = About::all();
        $courseHead = CourseHead::all();
        $course = Course::all();
        $faq = Faq::all();
        $company = Company::all();
        $messageHead = MessageHead::all();
        $newCourse = NewCourse::all();
        $logo = Logo::all();
        return view('frontend.index' ,[
            'nav' => $nav,
            'header' => $header,
            'abouts' => $about,
            'courseHead' => $courseHead,
            'course' => $course,
            'faq' => $faq,
            'company' => $company,
            'messageHead' => $messageHead,
            'newCourse' => $newCourse,
            'logo' => $logo
        ]);
    }


}
