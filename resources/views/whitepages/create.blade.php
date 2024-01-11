@extends('layouts.app')
@section('content')
    <div class="container">
        @php
            $typeOptions = [
                'input', 'select', 'uploadfile', 'downloadfile', 'appointment', 'text'
            ];
            $appointmentTypes = [
                'physical', 'virtual', 'phone'
            ];
            $elementNo = $lastElement;
        @endphp
        <form method="POST" action="{{ route('white_pages.store', ['applicationId' => $applicationData['application_id']]) }}" enctype="multipart/form-data">
            @csrf
            <div class="card mb-3" class="card">
                <div class="card-body px-5">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">Page Title (en)</label>
                            <input type="text" value="{{ $applicationData['en_page_title'] }}" name="en_page_title" class="form-control" id="enPageTitle" placeholder="Page Title">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleInputEmail1">Page Title (ar)</label>
                            <input type="text" value="{{ $applicationData['ar_page_title'] }}" name="ar_page_title" class="form-control" id="arPageTitle" placeholder="عنوان الصفحة">
                        </div>
                        {{-- <div class="col-md-1 my-auto ml-auto">
                            <button class="btn btn-primary rounded-circle py-2 px-2" id="editBtn" onclick="editPageTitle(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="25">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                            <button class="btn btn-success rounded-circle py-2 px-2" id="updateBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="25">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                        </div> --}}
                    </div>
                </div>
                <div>
                </div>
            </div>
            @foreach ($data as $item)
                <div class="card mb-3" class="card">
                    <div class="card-body px-5">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Question (en)</label>
                                <input type="text" value="{{ $item->en_question_text }}" class="form-control" placeholder="Page Title">
                            </div>
                            <div class="col-md-3">
                                <label>Question (ar)</label>
                                <input type="text" value="{{ $item->ar_question_text }}" class="form-control" placeholder="Question">
                            </div>
                            <div class="col-md-3">
                                <label>Type</label>
                                <select class="form-control">
                                    <option>Select...</option>
                                    @foreach ($typeOptions as $option)
                                        <option value="{{ $option }}" {{ $item->type == $option ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-1 my-auto ml-auto">
                                <button class="btn btn-danger" onclick="deleteElement(this)">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div id="elements">
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-primary px-3" onclick="addElement(event)">Add Element</button>
                <button class="btn btn-success px-5" type="submit">Save</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#textType, #appointmentType, #downloadFileType, #selectType, #appointmentLocation, #updateBtn').prop('hidden', true)
            // $('#enPageTitle, #arPageTitle').prop('disabled', true)
        })

        var lastElementNo = parseInt(`{{$lastElement}}`)
        const addElement = (event) => {
            event.preventDefault()
            event.stopPropagation()
            const element = document.querySelector('#elements')
            lastElementNo = lastElementNo + 1

            element.innerHTML += `
                <div class="card mb-3" class="card">
                    <div class="card-body px-5">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <input type="hidden" name="stage_no[]" value="1">
                                    <input type="hidden" name="element_no[]" value="${lastElementNo}">
                                    <div class="col-md-4 mt-2">
                                        <label>Question (en)</label>
                                        <input type="text" name="en_question_text[]" class="form-control" placeholder="Question">
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label>Question (ar)</label>
                                        <input type="text" name="ar_question_text[]" class="form-control" placeholder="سؤال">
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label>Type</label>
                                        <select class="form-control" name="type[]" onchange="toggleTypes(event, textType${lastElementNo}, appointmentType${lastElementNo}, selectType${lastElementNo}, downloadFileType${lastElementNo})">
                                            <option>Select...</option>
                                            @foreach ($typeOptions as $option)
                                                <option value="{{ $option }}">{{ $option }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>Extra Information (en)</label>
                                        <input type="text" name="en_extra_information[]" class="form-control" placeholder="Extra Information">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>Extra Information (ar)</label>
                                        <input type="text" name="ar_extra_information[]" class="form-control" placeholder="معلومات اضافية">
                                    </div>
                                </div>
                                <div id="appointmentType${lastElementNo}" class="d-none">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <label>Option Date 1</label>
                                            <input type="date" name="option_date_1[]" class="form-control" placeholder="Option Date 1">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label>Option Time 1</label>
                                            <input type="time" name="option_time_1[]" class="form-control" placeholder="Option Time 1">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label>Option Date 2</label>
                                            <input type="date" name="option_date_2[]" class="form-control" placeholder="Option Date 2">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label>Option Time 2</label>
                                            <input type="time" name="option_time_2[]" class="form-control" placeholder="Option Time 2">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label>Option Date 3</label>
                                            <input type="date" name="option_date_3[]" class="form-control" placeholder="Option Date 3">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label>Option Time 3</label>
                                            <input type="time" name="option_time_3[]" class="form-control" placeholder="Option Time 3">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label>Appointment Type</label>
                                            <select class="form-control" onchange="toggleAppointmentLocation(event)">
                                                <option>Select...</option>
                                                @foreach ($appointmentTypes as $option)
                                                <option value="{{ $option }}">{{ $option }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-3"  id="appointmentLocation">
                                            <label>Appointment Location</label>
                                            <input type="text" name="appointment_location[]" class="form-control" placeholder="Appointment Location">
                                        </div>
                                    </div>
                                </div>
                                <div id="selectType${lastElementNo}" class="d-none">
                                    <div class="row">
                                        <div class="col-md-3 mt-3">
                                            <label>Option 1 (en)</label>
                                            <input type="text" name="en_option1[]" class="form-control" placeholder="Option 1">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 1 (ar)</label>
                                            <input type="text" name="ar_option1[]" class="form-control" placeholder="الخيار 1">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 2 (en)</label>
                                            <input type="text" name="en_option2[]" class="form-control" placeholder="Option 2">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 2 (ar)</label>
                                            <input type="text" name="ar_option2[]" class="form-control" placeholder="2 الخيار">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 3 (en)</label>
                                            <input type="text" name="en_option3[]" class="form-control" placeholder="Option 3">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 3 (ar)</label>
                                            <input type="text" name="ar_option3[]" class="form-control" placeholder="3 الخيار">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 4 (en)</label>
                                            <input type="text" name="en_option4[]" class="form-control" placeholder="Option 4">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 4 (ar)</label>
                                            <input type="text" name="ar_option4[]" class="form-control" placeholder="4 الخيار">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 5 (en)</label>
                                            <input type="text" name="en_option5[]" class="form-control" placeholder="Option 5">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 5 (ar)</label>
                                            <input type="text" name="ar_option5[]" class="form-control" placeholder="5 الخيار">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 6 (en)</label>
                                            <input type="text" name="en_option6[]" class="form-control" placeholder="Option 6">
                                        </div>
                                        <div class="col-md-3 mt-3">
                                            <label>Option 6 (ar)</label>
                                            <input type="text" name="ar_option6[]" class="form-control" placeholder="6 الخيار">
                                        </div>
                                    </div>
                                </div>
                                <div id="downloadFileType${lastElementNo}" class="d-none">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <input type="file" name="download_file[]" id="">
                                        </div>
                                    </div>
                                </div>
                                <div id="textType${lastElementNo}" class="d-none">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <label>Notes</label>
                                            <input type="text" name="" class="form-control" placeholder="Notes">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 my-auto ml-auto">
                                <button class="btn btn-danger" onclick="deleteElement(this)">X</button>
                            </div>
                        </div>
                    </div>
                </div>
            `
        }

        const deleteElement = (button) => {
            event.preventDefault()
            const card = button.closest('.card')
            card.remove()
        }

        const toggleTypes = (event, textType, appointmentType, selectType, downloadFileType) => {
            const selectedValue = event.target.value;

            const textTypeId = textType.id
            const appointmentTypeId = appointmentType.id
            const selectTypeId = selectType.id
            const downloadFileTypeId = downloadFileType.id
            const appointmentLocationId = appointmentLocation.id
            
            $(`#${textTypeId}, #${appointmentTypeId}, #${downloadFileTypeId}, #${selectTypeId}`).removeClass('d-none');

            const hideAll = () => {
                $(`#${textTypeId}, #${appointmentTypeId}, #${downloadFileTypeId}, #${selectTypeId}`).prop('hidden', true);
            };

            const showElement = (elementId) => {
                $(elementId).prop('hidden', false);
            };

            hideAll();

            switch (selectedValue) {
                case 'select':
                    showElement(`#${selectTypeId}`);
                    break;

                case 'downloadfile':
                    showElement(`#${downloadFileTypeId}`);
                    break;

                case 'appointment':
                    showElement(`#${appointmentTypeId}`);
                    break;

                case 'text':
                    showElement(`#${textTypeId}`);
                    break;

                case 'input':
                case 'uploadfile':
                    break;
            }
        }

        // const toggleTypes = (event, textType, appointmentType, selectType, downloadFileType, appointmentLocation) => {
        //     const selectedValue = event.target.value;

        //     $(`#${textType}, #${appointmentType}, #${downloadFileType}, #${selectType}, #${appointmentLocation}`).removeClass('d-none');

        //     const hideAll = () => {
        //         $(`#${textType}, #${appointmentType}, #${downloadFileType}, #${selectType}, #${appointmentLocation}`).prop('hidden', true);
        //     };

        //     const showElement = (elementId) => {
        //         $(elementId).prop('hidden', false);
        //     };

        //     hideAll();

        //     switch (selectedValue) {
        //         case 'select':
        //             showElement(`#${selectType}`);
        //             break;

        //         case 'downloadfile':
        //             showElement(`#${downloadFileType}`);
        //             break;

        //         case 'appointment':
        //             showElement(`#${appointmentType}`);
        //             break;

        //         case 'text':
        //             showElement(`#${textType}`);
        //             break;

        //         case 'input':
        //         case 'uploadfile':
        //             break;
        //     }
        // };

        // const toggleTypes = (event, appointmentType, selectType, downloadFileType, textType) => {
        //     const selectedValue = event.target.value;

        //     $('#${textType}, #appointmentType, #downloadFileType, #selectType, #appointmentLocation').removeClass('d-none')
        //     const hideAll = () => {
        //         $('#${textType}, #appointmentType, #downloadFileType, #selectType, #appointmentLocation').prop('hidden', true)
        //     }

        //     const showElement = (elementId) => {
        //         $(elementId).prop('hidden', false);
        //     }

        //     hideAll()

        //     switch (selectedValue) {
        //         case 'select':
        //             showElement('#selectType')
        //             break

        //         case 'downloadfile':
        //             showElement('#downloadFileType')
        //             break

        //         case 'appointment':
        //             showElement('#appointmentType')
        //             break

        //         case 'text':
        //             showElement('#${textType}')
        //             break

        //         case 'input':
        //         case 'uploadfile':
        //             break
        //     }
        // }

        const editPageTitle = (event) => {
            event.preventDefault()
            event.stopPropagation()
            $('#enPageTitle, #arPageTitle').prop('disabled', false)
            $('#editBtn').prop('hidden', true)
            $('#updateBtn').prop('hidden', false)
        }

        const toggleAppointmentLocation = (event) => {
            const selectedValue = event.target.value
            if (selectedValue === 'physical') {
                $('#appointmentLocation').prop('hidden', false)
            } else {
                $('#appointmentLocation').prop('hidden', true)
            }
        }
    </script>
@endsection