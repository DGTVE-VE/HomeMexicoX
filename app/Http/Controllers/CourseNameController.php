<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateCourseNameRequest;
use App\Http\Requests\UpdateCourseNameRequest;
use App\Repositories\CourseNameRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class CourseNameController extends Controller
{
    /** @var  CourseNameRepository */
    private $courseNameRepository;

    public function __construct(CourseNameRepository $courseNameRepo)
    {
        $this->courseNameRepository = $courseNameRepo;
    }

    
    /**
     * Display a listing of the CourseName.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {    
//        $this->courseNameRepository->pushCriteria(new RequestCriteria($request));
//        $courseNames = $this->courseNameRepository->all();
        $courseNames = \App\Models\CourseName::all();
        return view('courseNames.index')
            ->with('courseNames', $courseNames);
    }

    /**
     * Show the form for creating a new CourseName.
     *
     * @return Response
     */
    public function create()
    {
        return view('courseNames.create');
    }

    /**
     * Store a newly created CourseName in storage.
     *
     * @param CreateCourseNameRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseNameRequest $request)
    {
        $input = $request->all();

        $courseName = $this->courseNameRepository->create($input);

        Flash::success('CourseName saved successfully.');

        return redirect(route('courseNames.index'));
    }

    /**
     * Display the specified CourseName.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseName = $this->courseNameRepository->findWithoutFail($id);

        if (empty($courseName)) {
            Flash::error('CourseName not found');

            return redirect(route('courseNames.index'));
        }

        return view('courseNames.show')->with('courseName', $courseName);
    }

    /**
     * Show the form for editing the specified CourseName.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseName = $this->courseNameRepository->findWithoutFail($id);

        if (empty($courseName)) {
            Flash::error('CourseName not found');

            return redirect(route('courseNames.index'));
        }

        return view('courseNames.edit')->with('courseName', $courseName);
    }

    /**
     * Update the specified CourseName in storage.
     *
     * @param  int              $id
     * @param UpdateCourseNameRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseNameRequest $request)
    {
        $courseName = $this->courseNameRepository->findWithoutFail($id);

        if (empty($courseName)) {
            Flash::error('CourseName not found');

            return redirect(route('courseNames.index'));
        }

        $courseName = $this->courseNameRepository->update($request->all(), $id);

        Flash::success('CourseName updated successfully.');

        return redirect(route('courseNames.index'));
    }

    /**
     * Remove the specified CourseName from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseName = $this->courseNameRepository->findWithoutFail($id);

        if (empty($courseName)) {
            Flash::error('CourseName not found');

            return redirect(route('courseNames.index'));
        }

        $this->courseNameRepository->delete($id);

        Flash::success('CourseName deleted successfully.');

        return redirect(route('courseNames.index'));
    }
}
