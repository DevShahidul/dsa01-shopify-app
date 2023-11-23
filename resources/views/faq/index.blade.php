@extends('layouts.app')

@section('content')
<h1 class="pb-3">Faqs</h1>
<div class="card p-0 overflow-hidden">
    <div class="table-area">
        <table class="table table-hover scrollable highlight-with-color-and-bg">
            <thead class="table-light">
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">Group id</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody style="height: 359px;">
                <tr>
                    <td>Capacity & Performance Management</td>
                    <td>1</td>
                    <td>Random question</td>
                    <td>Random answer</td>
                    <td>
                        <div class="status green">Active</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection('content')
