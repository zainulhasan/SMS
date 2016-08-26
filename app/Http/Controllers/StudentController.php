<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Session;
use App\student;
use App\StudentGuardian;
use App\StudentRecord;
use  Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $students = student::all();
        return view('student.students', compact('students'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {


       $session = Session::where('startingDate', 'Like', '%' . date('Y'))->first();



       $con = ['session_id' => $session->id, 'status' => 0];
       $classes = Classes::where($con)->groupby('name')->distinct()->get();


        return view('student.create_student', compact('classes', 'session'));
    }


    public function edit($student_id)
    {


        $classes = Classes::all();
        $student = Student::find($student_id);
        $sg = StudentGuardian::where('student_id', '=', $student->id)->first();
        $sr = studentRecord::where('student_id', '=', $student->id)->first();


        return view('student.edit_student', compact('student', 'classes', 'sr', 'sg'));
    }


    /**
    * @return string
     */
    public function getSections(Request $request)
    {
        $class_id = $request->get('class_id');
        $section = Classes::where('id', '=', $class_id)->get();

        return $section;
    }



    public function getPDF($student_id)
    {
        $student=Student::find($student_id);
        $sg = StudentGuardian::where('student_id', '=', $student->id)->first();
        $sr = studentRecord::where('student_id', '=', $student->id)->first();


        $pdf = PDF::loadView('pdf.index',compact('student','sg','sr'))->setPaper('a4');
        return $pdf->stream('myPdf.pdf');#view('pdf.pdf',compact('student'));


        //return view('pdf.index',compact('student','sg','sr'));
    }


    public function delete(Request $request)
    {

        $student = Student::find($request->get('student_id'));
        $student->delete();

        return "1";

    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $student = new student();
        $guardian = new studentGuardian();
        $studentRecord = new studentRecord();

        $destinationPath = 'img'; // upload path


        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $fileName = rand(1111, 9999) . 'Stdimage' . '.' . $extension;
        $image->move($destinationPath, $fileName);
        $student->image = $fileName;


        $studnetCnicCopy = $request->file('studentCnicCopy');
        $student->cnicImage = $fileName;
        $extension = $studnetCnicCopy->getClientOriginalExtension();
        $fileName = rand(1111, 9999) . 'Stdcnic' . '.' . $extension;
        $studnetCnicCopy->move($destinationPath, $fileName);


        $studentPassportCopy = $request->file('studentPassportCopy');

        $extension = $studentPassportCopy->getClientOriginalExtension();
        $fileName = rand(1111, 9999) . 'Stdpassport' . '.' . $extension;
        $studentPassportCopy->move($destinationPath, $fileName);
        $student->passportImage = $fileName;


        $studentFirstName = $request->get('studentFirstName');
        $studentLastName = $request->get('studentLastName');
        $studentSection = $request->get('studentSection');
        $studentClass = $request->get('studentClass');
        $studentDob = $request->get('studentDob');
        $studentGender = $request->get('studentGender');


        $studentFatherName = $request->get('studentFatherName');
        $studentMotherName = $request->get('studentMotherName');

        $studnetReligion = $request->get('studentReligion');
        $studnetLanguage = $request->get('studentLanguage');
        $studnetNationality = $request->get('studentNationality');

        $studnetCnic1 = $request->get('studentCnic1');
        $studnetCnic2 = $request->get('studentCnic2');
        $studnetCnic3 = $request->get('studentCnic3');


        $studentPassport = $request->get('studentPassport');
        $studnetContactNo1 = $request->get('studentContactNo1');
        $studnetContactNo2 = $request->get('studentContactNo2');

        $studnetAddress = $request->get('studentAddress');

        $studnetCity = $request->get('studentCity');
        $studnetProvince = $request->get('studentProvince');
        $studnetCountry = $request->get('studentCountry');


        $studnetLoc = $request->get('studentPlaceOfBirth');


        $student->firstName = $studentFirstName;
        $student->lastName = $studentLastName;
        $student->gender = $studentGender;

        $student->fatherName = $studentFatherName;
        $student->motherName = $studentMotherName;
        $student->language = $studnetLanguage;

        $student->religion = $studnetReligion;
        $student->dob = $studentDob;

        $student->nationality = $studnetNationality;
        $student->cnic = $studnetCnic1 . $studnetCnic2 . $studnetCnic3;

        $student->passport = $studentPassport;
        $student->contact1 = $studnetContactNo1;
        $student->contact2 = $studnetContactNo2;


        $student->address = $studnetAddress;
        $student->city = $studnetCity;
        $student->province = $studnetProvince;
        $student->country = $studnetCountry;
        $student->loc = $studnetLoc;


        $con = ['id' => $studentClass, 'section' => $studentSection];
        $classes = Classes::where($con)->first();
        $student->classes_id = $classes['id'];


        $session = Session::where('startingDate', 'Like', '%' . date('Y'))->first();
        $student->session_id = $session->id;


        $student->save();


        /**
         * Student Section End
         */


        /**
         * Guardian Section Started
         */

        $guardianName = $request->get('guardianName');
        $guardianDob = $request->get('guardianDob');
        $guardianGender = $request->get('guardianGender');
        $guardianReligion = $request->get('guardianReligion');
        $guardianLanguage = $request->get('guardianLanguage');
        $guardianNationality = $request->get('guardianNationality');

        $guardianCnic1 = $request->get('guardianCnic1');
        $guardianCnic2 = $request->get('guardianCnic2');
        $guardianCnic3 = $request->get('guardianCnic3');


        $guardianCnicCopy = $request->get('guardianCnicCopy');

        $guardianPassport = $request->get('guardianPassport');
        $guardianPassportCopy = $request->get('guardianPassport');


        $guardianContactNo1 = $request->get('guardianContactNo1');
        $guardianContactNo2 = $request->get('guardianContactNo2');

        $guardianIncome = $request->get('guardianIncome');

        $guardianOccupation = $request->get('guardianOccupation');


        $guardianEmail = $request->get('guardianEmail');
        $guardianAddress = $request->get('guardianAddress');


        $guardian->Name = $guardianName;
        $guardian->gender = $guardianGender;
        $guardian->language = $guardianLanguage;
        $guardian->religion = $guardianReligion;
        $guardian->nationality = $guardianNationality;
        $guardian->dob = $guardianDob;

        $guardian->cnic = $guardianCnic1 . $guardianCnic2 . $guardianCnic3;

        $guardian->passport = $guardianPassport;
        $guardian->contact1 = $guardianContactNo1;
        $guardian->contact2 = $guardianContactNo2;


        $guardian->income = $guardianIncome;

        $guardian->occupation = $guardianOccupation;
        $guardian->email = $guardianEmail;
        $guardian->address = $guardianAddress;
        $guardian->student_id = $student->id;


        $guardianCnicCopy = $request->file('guardianCnicCopy');
        $guardianPassportCopy = $request->file('guardianPassportCopy');

        $extension = $guardianCnicCopy->getClientOriginalExtension();
        $fileName = rand(1111, 9999) . 'gurdCnic' . '.' . $extension;
        $guardianCnicCopy->move($destinationPath, $fileName);
        $guardian->cnicImage = $fileName;


        $extension = $guardianPassportCopy->getClientOriginalExtension();
        $fileName = rand(1111, 9999) . 'gurdPassport' . '.' . $extension;
        $guardianPassportCopy->move($destinationPath, $fileName);
        $guardian->passportImage = $fileName;

        $guardian->save();


        $prevClass = $request->get('PrevClass');
        $prevSection = $request->get('PrevSection');
        $prevSession = $request->get('PrevSession');
        $PrevRoll = $request->get('PrevRoll');
        $prevMarks = $request->get('PrevMarks');
        $prevSchool = $request->get('PrevSchool');
        $studentVaccination = $request->get('vaccination');


        $studentRecord->class = $prevClass;
        $studentRecord->roll = $PrevRoll;


        $studentRecord->section = $prevSection;


        $studentRecord->session = $prevSession;

        $studentRecord->marks = $prevMarks;
        $studentRecord->school = $prevSchool;
        $studentRecord->student_id = $student->id;




        $studentRecord->vaccination = $studentVaccination;


        $studnetvaccinationCopy = $request->file('studentVaccinationCopy');
        $extension = $studnetvaccinationCopy->getClientOriginalExtension();
        $fileName = rand(1111, 9999) . 'vaccination' . '.' . $extension;
        $studentRecord->vaccinationImage = $fileName;
        $studnetvaccinationCopy->move($destinationPath, $fileName);




        $studentCertificateImage = $request->file('studentCertificateImage');
        $extension = $studentCertificateImage->getClientOriginalExtension();
        $fileName = rand(1111, 9999) . 'certificate' . '.' . $extension;
        $studentRecord->certificateImage = $fileName;
        $studentCertificateImage->move($destinationPath, $fileName);






        $studentRecord->save();


        return "1";

    }


    public function editStore(Request $request)
    {
        $student = Student::find($request->get('student_id'));
        $guardian = StudentGuardian::where('student_id', '=', $student->id)->first();
        $studentRecord = studentRecord::where('student_id', '=', $student->id)->first();

        $destinationPath = 'img'; // upload path


        $image = $request->file('image');

        if ($image != null or $image != "") {

            $extension = $image->getClientOriginalExtension();
            $fileName = rand(1111, 9999) . 'Stdimage' . '.' . $extension;
            $image->move($destinationPath, $fileName);
            $student->image = $fileName;

        }


        $studnetCnicCopy = $request->file('studentCnicCopy');
        if ($studnetCnicCopy != null or $studnetCnicCopy != "") {
            $student->cnicImage = $fileName;
            $extension = $studnetCnicCopy->getClientOriginalExtension();
            $fileName = rand(1111, 9999) . 'Stdcnic' . '.' . $extension;
            $studnetCnicCopy->move($destinationPath, $fileName);
        }




        $studentCertificateImage = $request->file('studentCertificateImage');
        if ($studentCertificateImage != null or $studentCertificateImage != "") {
            $studentCertificateImage = $request->file('studentCertificateImage');
            $extension = $studentCertificateImage->getClientOriginalExtension();
            $fileName = rand(1111, 9999) . 'certificate' . '.' . $extension;
            $studentRecord->certificateImage = $fileName;
            $studentCertificateImage->move($destinationPath, $fileName);


        }


        $studentPassportCopy = $request->file('studentPassportCopy');
        if ($studentPassportCopy != null or $studentPassportCopy != "") {
            $extension = $studentPassportCopy->getClientOriginalExtension();
            $fileName = rand(1111, 9999) . 'Stdpassport' . '.' . $extension;
            $studentPassportCopy->move($destinationPath, $fileName);
            $student->passportImage = $fileName;
        }


        $studentFirstName = $request->get('studentFirstName');
        $studentLastName = $request->get('studentLastName');
        $studentSection = $request->get('studentSection');
        $studentClass = $request->get('studentClass');
        $studentDob = $request->get('studentDob');
        $studentGender = $request->get('studentGender');
        $studentFatherName = $request->get('studentFatherName');
        $studnetReligion = $request->get('studentReligion');
        $studnetLanguage = $request->get('studentLanguage');
        $studnetNationality = $request->get('studentNationality');

        $studnetCnic1 = $request->get('studentCnic1');
        $studnetCnic2 = $request->get('studentCnic2');
        $studnetCnic3 = $request->get('studentCnic3');


        $studentPassport = $request->get('studentPassport');
        $studnetContactNo1 = $request->get('studentContactNo1');
        $studnetContactNo2 = $request->get('studentContactNo2');

        $studnetAddress = $request->get('studentAddress');

        $studnetCity = $request->get('studentCity');
        $studnetProvince = $request->get('studentProvince');
        $studnetCountry = $request->get('studentCountry');
        $studentMotherName = $request->get('studentMotherName');
        $studnetLoc = $request->get('studentPlaceOfBirth');


        $student->firstName = $studentFirstName;
        $student->lastName = $studentLastName;
        $student->gender = $studentGender;

        $student->fatherName = $studentFatherName;
        $student->language = $studnetLanguage;

        $student->religion = $studnetReligion;


        if ($studentDob != "" or $studentClass != null) {
            $student->dob = $studentDob;
        }

        $student->nationality = $studnetNationality;
        $student->cnic = $studnetCnic1 . $studnetCnic2 . $studnetCnic3;

        $student->passport = $studentPassport;
        $student->contact1 = $studnetContactNo1;
        $student->contact2 = $studnetContactNo2;


        $student->address = $studnetAddress;
        $student->city = $studnetCity;
        $student->province = $studnetProvince;
        $student->country = $studnetCountry;
        $student->loc = $studnetLoc;


        if ($studentClass != "Select" or $studentClass != "" or $studentClass != null) {

            $con = ['id' => $studentClass, 'section' => $studentSection];
            $classes = Classes::where($con)->first();
            //$student->classes_id = $classes['id'];

        }


        $student->save();


        /**
         * Student Section End
         */


        /**
         * Guardian Section Started
         */

        $guardianName = $request->get('guardianName');
        $guardianDob = $request->get('guardianDob');
        $guardianGender = $request->get('guardianGender');
        $guardianReligion = $request->get('guardianReligion');
        $guardianLanguage = $request->get('guardianLanguage');
        $guardianNationality = $request->get('guardianNationality');

        $guardianCnic1 = $request->get('guardianCnic1');
        $guardianCnic2 = $request->get('guardianCnic2');
        $guardianCnic3 = $request->get('guardianCnic3');


        $guardianCnicCopy = $request->get('guardianCnicCopy');

        $guardianPassport = $request->get('guardianPassport');
        $guardianPassportCopy = $request->get('guardianPassport');


        $guardianContactNo1 = $request->get('guardianContactNo1');
        $guardianContactNo2 = $request->get('guardianContactNo2');

        $guardianIncome = $request->get('guardianIncome');

        $guardianOccupation = $request->get('guardianOccupation');


        $guardianEmail = $request->get('guardianEmail');


        $guardian->Name = $guardianName;
        $guardian->gender = $guardianGender;
        $guardian->language = $guardianLanguage;
        $guardian->religion = $guardianReligion;
        $guardian->nationality = $guardianNationality;

        if ($guardianDob != null or $guardianDob != "") {
            $guardian->dob = $guardianDob;
        }

        $guardian->cnic = $guardianCnic1 . $guardianCnic2 . $guardianCnic3;

        $guardian->passport = $guardianPassport;
        $guardian->contact1 = $guardianContactNo1;
        $guardian->contact2 = $guardianContactNo2;


        $guardian->income = $guardianIncome;

        $guardian->occupation = $guardianOccupation;
        $guardian->email = $guardianEmail;


        $guardianCnicCopy = $request->file('guardianCnicCopy');
        $guardianPassportCopy = $request->file('guardianPassportCopy');


        if ($guardianCnicCopy != null or $guardianCnicCopy != "") {

            $extension = $guardianCnicCopy->getClientOriginalExtension();
            $fileName = rand(1111, 9999) . 'gurdCnic' . '.' . $extension;
            $guardianCnicCopy->move($destinationPath, $fileName);
            $guardian->cnicImage = $fileName;

        }


        if ($guardianPassportCopy != null or $guardianPassportCopy != "") {

            $extension = $guardianPassportCopy->getClientOriginalExtension();
            $fileName = rand(1111, 9999) . 'gurdPassport' . '.' . $extension;
            $guardianPassportCopy->move($destinationPath, $fileName);
            $guardian->passportImage = $fileName;

        }





       $guardian->save();


        $prevClass = $request->get('PrevClass');
        $prevSection = $request->get('PrevSection');
        $prevSession = $request->get('PrevSession');
        $PrevRoll = $request->get('PrevRoll');
        $prevMarks = $request->get('PrevMarks');
        $prevSchool = $request->get('PrevSchool');


        $studentRecord->class = $prevClass;
        $studentRecord->roll = $PrevRoll;


        $studentRecord->section = $prevSection;


        $studentRecord->session = $prevSession;

        $studentRecord->marks = $prevMarks;
        $studentRecord->school = $prevSchool;
        $studentRecord->student_id = $student->id;



        $studentVaccination = $request->get('vaccination');




        if($studentVaccination !=null and $studentVaccination!="") {
            $studentRecord->vaccination = $studentVaccination;
        }


        $studnetvaccinationCopy = $request->file('studentVaccinationCopy');

        if($studnetvaccinationCopy !=null and $studnetvaccinationCopy!="") {
            $studentRecord->vaccinationImage = $fileName;
            $extension = $studnetvaccinationCopy->getClientOriginalExtension();
            $fileName = rand(1111, 9999) . 'vaccination' . '.' . $extension;
            $studnetvaccinationCopy->move($destinationPath, $fileName);

        }


       $studentRecord->save();


        return "1";

    }


}
