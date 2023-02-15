@extends('layouts.app')

@section('content')
    <h1 class="text-center p-3">Kompaniyamizga xush kelibsiz!</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="mb-3">
                <button class="btn btn-success"><a style="color: #fff; text-decoration: none" href="{{ route('companies.index') }}">Companies</a></button>
            </div>


            <table class="table table-bordered">
                <tr>
                    <td>Tashkilot nomi:</td>
                    <td>{{ $company->name }}</td>
                </tr>
                <tr>
                    <td>Tashkilot manzili:</td>
                    <td>{{ $company->address }}</td>
                </tr>
                <tr>
                    <td>Telefon raqami:</td>
                    <td>{{ $company->phone }}</td>
                </tr>
                <tr>
                    <td>Qo'shilgan vaqt:</td>
                    <td>{{ $company->created_at }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection