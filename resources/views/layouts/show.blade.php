@extends ('layouts.master')

@section('showDetailsPertanyaan')


    <div class="col-md-6">
            Box Comment
            @foreach ($jawaban as $key => $j)
            <div class="card card-widget" style="width:100%;">
              <div class="card-header">
                <div class="user-block">
             
                  <span class="username"><a href="#">{{ $j->profil_id}} </a></span>
                 
                 
                 
                
                  <span class="description" style="float:right;">Diupload pada {{  $j->tanggal_dibuat}}</span>
                </div>
               
              </div>

              <div class="card-body">
             <p>Answer : <br>{{ $j->isi}} </p>

                

            
       
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                <span class="float-right text-muted">45 likes - 2 comments</span>
              </div>
            
         
   
              <div class="card-footer">
              Comments:
              <div>
                <form action="#" method="post">
                 <p>user name</p>
                  <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
                </div>
              </div>
         
            </div>

          </div>
          <br>
          @endforeach
@endsection