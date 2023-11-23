@extends('layouts.app')

@section('content')
<form action="" method="post" class="card overflow-hidden">
    <div class="mt-4 mt-spacing-md-10">
        <div class="form-group-item">
            <label for="group_id">Group Id</label>
            <div class="d-flex align-items-center">
                <select name="group_id" id="group_id" class="form-select py-spacing-4_5">
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                </select>
            </div>
        </div>
        <div class="form-group-item">
            <label for="faq-question">Question</label>
            <div class="d-flex align-items-center">
                <input id="faq-question" type="text" name="faq_question" class="form-control  py-spacing-4_5" placeholder="Enter question">
            </div>
        </div>
        <div class="form-group-item">
            <label for="faq-answer">Answer</label>
            <div class="d-flex align-items-center">
                <textarea id="faq-answer" name="faq_answer" class="form-control  py-spacing-4_5" placeholder="Enter answer"></textarea>
            </div>
        </div>
        <div class="d-sm-flex btn-row pt-3 pt-spacing-md-8 pb-spacing-md-5">
            <button type="button" class="btn ms-sm-auto btn-primary px-4 py-spacing-3" data-bs-dismiss="modal" aria-label="Close">
                Save
            </button>
        </div>
    </div>
</form>
@endsection('content')
