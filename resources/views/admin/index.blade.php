@extends('admin.base')

@section('title', 'Dashboard')
@section('content')
    @include('layouts.admin.dashboard')
@endsection

@section('js')
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      document.querySelector('#dashboard').classList.add('text-rose-500');
    </script>
@endsection