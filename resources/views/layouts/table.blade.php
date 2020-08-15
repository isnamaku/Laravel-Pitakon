@extends('layouts.master')
@section('table')
<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
              
                    <tr><th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Nama Proyek</th>
                    <th rowspan="1" colspan="1">Deskripsi Proyek</th>
                    <th rowspan="1" colspan="1">Tangal Mulai</th>
                    <th rowspan="1" colspan="1">Tanggal Selesai</th>
                    <th rowspan="1" colspan="1">Status</th>
                  </tfoot>
                  <tbody>
                    
                  @foreach($proyek as $p)
                  <tr role="row" class="odd">
                      <td class="sorting_1">{{ $p->idProyek }}</td>
                      <td>{{ $p->namaProyek }}</td>
                      <td>{{ $p->descProyek }}</td>
                      <td>{{ $p->tanggal_mulai }}</td>
                      <td>{{ $p->tanggal_deadline }}</td>
                      <td><?php if($p->status==0) echo"belum selesai ";
                       else echo "sudah selesai" ?></td>
                     
                   </tr>

		@endforeach
                </table>
@endsection