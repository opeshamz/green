@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in as a admin') }}


                    </div>
                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>subject1</th>
                            <th>subject2</th>
                            <th>subject3</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
