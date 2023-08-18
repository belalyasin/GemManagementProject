@extends('layouts.master')

@section('title')
    حزم التدريب
@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">

        @role('admin')
            <div class="d-flex justify-content-center mb-3">
                <a href="{{ route('trainingPackages.create') }}" class="btn btn-success">إضافة حزمة جديدة</a>
            </div>
        @endrole
        <div class="col-md-12 px-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جميع الحزم</h3>
                </div>
                <div class="card-body">
                    <table id="table" class="table text-center ">
                        <thead>
                            <tr>
                                <th class="col-2">الاسم</th>
                                <th class="col-2">السعر</th>
                                <th class="col-2">الصورة</th>
                                <th class="col-2">أنشئت في</th>
                                <th class="col-2">أجراءات</th>
                            </tr>
                        </thead>
                        @foreach ($packageCollection as $package)
                            <tr>
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->price }}</td>
                                <td><img src="{{ url('imgs/gym/' . $package->image) }}" width="50px" height="50px"
                                        alt="not found" /></td>
                                <td>{{ \Carbon\Carbon::parse($package->created_at)->format('Y-m-d') }} </td>
                                <td class="d-flex justify-content-center">
                                    <!-- Show Button -->
                                    <a href="{{ route('trainingPackages.show', ['package' => $package->id]) }}"
                                        class="btn btn-md btn-info mr-2"><i class="fas fa-eye"></i></a>

                                    <!-- Edit & Delete Buttons -->
                                    @role('admin')
                                        <a href="{{ route('trainingPackages.edit', ['package' => $package->id]) }}"
                                            class="btn btn-md btn-warning mr-2"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('trainingPackages.destroy', $package->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-md btn-danger show-alert-delete-box"
                                                data-toggle="tooltip" title='Delete'><i class="fas fa-times"></i>
                                            </button>
                                        </form>
                                    @endrole
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

    @include('layouts.alertScript')
@stop
