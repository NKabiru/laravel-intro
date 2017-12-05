@extends('layouts.app')

@section('content')

    {{--Bootstrap here --}}

    <div class="panel-body">
        {{-- Employee form--}}
        <form action="/employee" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="fname" class="col-sm-3 control label">First Name</label>
                <div class="col-sm-6">
                    <input type="text" name="fname" id="employee-fname" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="lname" class="col-sm-3 control label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" name="lname" id="employee-lname" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="job" class="col-sm-3 control label">Occupation</label>
                <div class="col-sm-6">
                    <input type="text" name="job" id="employee-job" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="income" class="col-sm-3 control label">Income</label>
                <div class="col-sm-6">
                    <input type="number" name="income" id="employee-income" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        Add
                    </button>
                </div>
            </div>

        </form>
    </div>

    {{--Current Employees--}}
    @if (count($employees) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Employees
            </div>

            <div class="panel-body">
                <table class="table table-striped employee-table">
                    <thead>
                        <th>Name</th>
                        <th>Occupation</th>
                        <th>Income</th>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td class="table-text">
                                    {{ $employee->fname }} {{ $employee->lname }}
                                </td>
                                <td class="table-text">
                                    {{ $employee->job }}
                                </td>
                                <td class="table-text">
                                    {{ $employee->income }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection