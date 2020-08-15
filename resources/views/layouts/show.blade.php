@extends ('layouts.master')

@section('showDetailsPertanyaan')
<h4>Judul</h4>
    <h4> {{ $p->judul }} </h4>
    <p> {{ $p->isi }} </p>
@endsection