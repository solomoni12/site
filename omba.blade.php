@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h5>Maombi ya Misa</h5>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table w-100" id="table">
                <thead class="bg-light">
                    <th>S/N</th>
                    <th>Jina</th>
                    <th>Nia</th>
                    <th>Jumuiya</th>
                    <th>Maelezo</th>
                    <th>Tarehe</th>
                    <th>Kitendo</th>
                </thead>

                <tbody>
                        @php
                            $serialNumber = 1;
                        @endphp
                        @foreach ($maombi as $ombi)
                            <tr>
                                <td>{{ $serialNumber++ }}</td>
                                <td>{{ Str::limit($ombi->jina_kamili,'15','...') }}</td>
                                <td>{{ $ombi->nia }}</td>
                                <td>{{ $ombi->jumuiya }}</td>
                                <td>{{ Str::limit($ombi->maelezo,'15','..') }}</td>
                                <td>{{ Carbon::parse($ombi->date_create)->format('d-m-Y') }}</td>
                                <td>
                                    <button class="view btn btn-sm btn-info mr-1" id="{{ $ombi->id }}">Angalia</button>
                                    <button class="edit btn btn-sm btn-warning mr-1" id="{{ $ombi->id }}">Badili</button>
                                    <button class="delete btn btn-sm bg-light text-danger" id="{{ $ombi->id }}"><i class="fa fa-trash fa-fw"></i></button>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
