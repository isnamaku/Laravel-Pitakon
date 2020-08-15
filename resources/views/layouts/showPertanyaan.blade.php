@extends('layouts.master')
@section('showPertanyaan')
<h1 class="h3 mb-4 text-gray-800">Questions</h1>
<div class="card-body">
          <a class="btn btn-primary mb-2" href="/pertanyaan/form">CREATE NEW PERTANYAAN</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Judul</th>
                      <th>Pertanyaan</th>
                      <th>User</th>
                      <th>Tanggal</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                @foreach ($pertanyaan as $key => $p)
                    <tr>
                      <td>{{ $p->id}}</td>
                      <td>{{ $p->judul}}</td>
                      <td>{{ $p->isi}}</td>
                      <td>{{ $p->profil_id}}</td>
                      <td>{{ $p->tanggal_dibuat}}</td>
                      <td class="project-actions text-right" style="display:flex;"  >
                          <a class="btn btn-primary btn-sm ml-2" href="/pertanyaan/{{$p->id}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm ml-2" href="/pertanyaan/{{$p->id}}/edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <form action="/pertanyaan/{{$p->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-sm mr-2">
                          </form>
                      </td>
                    </tr>
                 @endforeach  
                  </tbody>
                </table>
              </div>

  <!-- @foreach ($pertanyaan ?? '' as $p)

              <div class="col-md-6">
            Box Comment
            <div class="card card-widget" style="width:100%;">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="" alt="User Image">
                  <span class="username"><a href="#">{{ $p->profil_id}}</a></span>
                  
                  <span class="description" style="float:right;">Diupload pada {{  $p->tanggal_dibuat}}</span>
                </div>
                /.user-block
                <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#"> 
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> 
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    </tr>
              /.card-tools 
              </div>
        
              <div class="card-body">
             <p>{{ $p->isi}} , ket : ini isi komen</p>

                

            
       
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                <span class="float-right text-muted">45 likes - 2 comments</span>
              </div>
     
              <div class="card-footer card-comments">
                <div class="card-comment">
             
                  <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      nama yang komen 
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span>
                   ----  isi komen
                  </div>
              
                </div>
     
               
   
              <div class="card-footer">
                <form action="#" method="post">
                  <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">

                  <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
              </div>
         
            </div>

          </div>
          <br>

          @endforeach   -->
@endsection
