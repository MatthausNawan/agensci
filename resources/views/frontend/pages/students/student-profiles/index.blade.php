@extends('layouts.frontend')


@section('content')

<div class="row">
    @include('frontend.pages.students._partials.menu')
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('students.student-profiles.create') }}" class="btn btn-secondary">Adicionar Portfolio</a>
            </div>
            <div class="card-body">
                <table class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Periodo</th>
                            <th>Universidade</th>
                            <th>Curriculo Lattes</th>
                            <th>Acões</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($studentProfiles as $studentProfile)
                        <tr>
                            <td>{{ $studentProfile->course_name ?? ''}}</td>
                            <td>{{ $studentProfile->period ?? ''}}</td>
                            <td>{{ $studentProfile->university_name ?? '' }}</td>
                            <td><a href="{{ $studentProfile->lattes_link ?? '' }}" target="_blank">{{ $studentProfile->lattes_link ?? '' }}</a></td>
                            <td>
                                <a href="{{ route('students.student-profiles.edit',$studentProfile->id) }}" class="btn btn-sm btn-dark">Ver</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>

@endsection
