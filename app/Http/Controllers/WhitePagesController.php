<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWhitePagesRequest;
use App\Models\Whitepage;
use DB;
use Illuminate\Http\Request;

class WhitePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Whitepage::first();
        return view('whitepages.create')->with([
            'data' => Whitepage::orderBy('element_no', 'asc')->get(),
            'applicationData' => [
                'application_id' => $data->application_id,
                'en_page_title' => $data->en_page_title,
                'ar_page_title' => $data->ar_page_title,
            ],
            'lastElement' => Whitepage::max('element_no')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $applicationId)
    {
        try {
            DB::beginTransaction();

            WhitePage::where('application_id', $applicationId)
                ->update([
                    'en_page_title' => $request->en_page_title,
                    'ar_page_title' => $request->ar_page_title,
                ]);

            $inputData = $request->all();
            foreach ($inputData['stage_no'] as $key => $stageNo) {
                Whitepage::create([
                    'application_id' => $applicationId,
                    'stage_no' => $stageNo,
                    'element_no' => $inputData['element_no'][$key],
                    'en_page_title' => $request->en_page_title,
                    'ar_page_title' => $request->ar_page_title,
                    'en_question_text' => $inputData['en_question_text'][$key],
                    'ar_question_text' => $inputData['ar_question_text'][$key],
                    'type' => $inputData['type'][$key],
                    'optional_date_1' => $inputData['option_date_1'][$key],
                    'optional_time_1' => $inputData['option_time_1'][$key],
                    'optional_date_2' => $inputData['option_date_2'][$key],
                    'optional_time_2' => $inputData['option_time_2'][$key],
                    'optional_date_3' => $inputData['option_date_3'][$key],
                    'optional_time_3' => $inputData['option_time_3'][$key],
                    'appointment_type' => $inputData['appointment_location'][$key],
                    'en_option1' => $inputData['en_option1'][$key],
                    'ar_option1' => $inputData['ar_option1'][$key],
                    'en_option2' => $inputData['en_option2'][$key],
                    'ar_option2' => $inputData['ar_option2'][$key],
                    'en_option3' => $inputData['en_option3'][$key],
                    'ar_option3' => $inputData['ar_option3'][$key],
                    'en_option4' => $inputData['en_option4'][$key],
                    'ar_option4' => $inputData['ar_option4'][$key],
                    'en_option5' => $inputData['en_option5'][$key],
                    'ar_option5' => $inputData['ar_option5'][$key],
                    'en_option6' => $inputData['en_option6'][$key],
                    'ar_option6' => $inputData['ar_option6'][$key],
                    'appointment_location' => $inputData['appointment_location'][$key],
                    'en_extra_information' => $inputData['en_extra_information'][$key],
                    'ar_extra_information' => $inputData['ar_extra_information'][$key],
                ]);
            }
            

            DB::commit();
            return redirect()->route('white_pages.create')->with([
                'data' => Whitepage::all()
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
