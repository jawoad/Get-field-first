@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <form action="{{ route('field.update', $field) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="date">Booking Date</label>
                <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror">

                @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="text" id="start_time" name="start_time" class="form-control @error('start_time') is-invalid @enderror" value="{{  old('start_time') ?? $field->start_time }}">

                @error('start_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="end_time">End Time</label>
                <input type="text" id="end_time" name="end_time" class="form-control @error('end_time') is-invalid @enderror" value="{{  old('end_time') ?? $field->end_time }}">

                @error('end_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea id="note" name="note" class="form-control @error('note') is-invalid @enderror">{{ old('note') ?? $field->note }}</textarea>

                @error('note')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <a href="{{ url()->previous() }}" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
