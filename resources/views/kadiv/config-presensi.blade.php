@extends('layouts.master')

@section('content')
@include('components.konfirmasi', ['text' => 'Apakah Anda yakin ingin memperbarui jadwal?'])
<div class="container-fluid pb-5 form-jadwal-absensi">
    <div class="row p-md-4 p-1">
        <div class="col-md-12">
            <div class="title d-flex align-items-center mb-2">
                <div class="back rounded p-2 d-flex justify-content-center align-items-center me-3">
                    <i class="fas fa-chevron-left text-muted"></i>
                </div>
                <h5>Pertemuan ke {{ $meetings->pertemuan }} - Miniclass {{ $meetings->miniclass->miniclass_name }}</h5>
            </div>
            <form class="update-jadwal form rounded p-5" action="{{ route('meetings.update', $meetings->token) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5 class="">Pertemuan {{ $meetings->pertemuan }}</h5>
                <div class="form-group mb-md-5 mb-4">
                    <label for="topik" class="form-label fs-6">Topik</label>
                    <input value="{{ $meetings->topik }}" type="text" class="form-control @error('topik') is-invalid @enderror" placeholder="Input Your Text in here" name="topik">
                    @error('topik')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input value="{{ $meetings->miniclass_id }}" type="hidden" class="form-control" name="miniclass_id">
                </div>
                <div class="form-group mb-md-5 mb-4">
                    <label for="tanggal" class="form-label fs-6">Tanggal</label>
                    <input value="{{ $meetings->tanggal }}" type="date" class="form-control" placeholder="YYYY/MM/DD" name="tanggal">
                </div>
                <div class="col-12 px-0">
                    <div class="row">
                        <div class="form-group mb-md-5 mb-4 col-lg-4 col-md-6 col-12">
                            <label for="start_time" class="form-label fs-6">Waktu Mulai</label>
                            <input value="{{ $meetings->start_time }}" type="time" class="@error('start_time') is-invalid @enderror form-control" placeholder="Input Your Text in here" name="start_time">
                            @error('start_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-md-5 mb-4 col-lg-4 col-md-6 col-12">
                            <label for="end_time" class="form-label fs-6">Waktu Berakhir</label>
                            <input value="{{ $meetings->end_time }}" type="time" class="@error('end_time') is-invalid @enderror form-control" placeholder="Input Your Text in here" name="end_time">
                            @error('end_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-md-5 mb-4 col-lg-4 col-md-12 col-12">
                            <label for="token" class="form-label fs-6">Token</label>
                            <input value="{{ $meetings->token }}" type="text" class="@error('token') is-invalid @enderror form-control" placeholder="Input Your Text in here" name="token">
                            @error('token')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end px-0">
                    <a href="{{ route('meetings.create') }}" class="btn btn-outline-secondary px-md-5 px-2 me-4"><b>Batal</b></a>
                    <button type="submit" class="btn btn-warning text-light px-md-5 px-2"><b>Update</b></button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('overrideScript')
<script>
    controlBodyBackgroundColor()
    controlPasswordVisibility()
    controlConfirmationModal()
</script>
@endsection
@endsection
