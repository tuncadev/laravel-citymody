<x-layout>

@section('content')

<div class="container" style="background-color: pink">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="text-center" style="color: red;"><h3>Laravel Favorite System Example</h3></div>
                <div class="card-body">
                    @if($posts->count())
                        @foreach($posts as $post)
                            <article class="col-xs-12 col-sm-6 col-md-3">
                                <div class="panel panel-info" data-id="{{ $post->id }}">
                                    <div class="panel-body">
                                        <a href="https://itsolutionstuff.com/upload/itsolutionstuff.png" title="Nature Portfolio" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                            <img src="https://itsolutionstuff.com/upload/itsolutionstuff.png" alt="Nature Portfolio" />
                                            <span class="overlay"><i class="fa fa-search"></i></span>
                                        </a>
                                    </div>  
                                    <div class="panel-footer">
                                        <h4><a href="#" title="Nature Portfolio">{{ $post->title }}</a></h4>
                                        <span class="pull-right">
                                            <span class="like-btn">
                                                <i id="like{{$post->id}}" class="glyphicon glyphicon-heart {{ $post->favoriters()->count() > 0  ? 'like-post' : '' }}"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {     


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('i.glyphicon-heart, i.glyphicon-heart-empty').click(function(){    
            var id = $(this).parents(".panel").data('id');
            var cObjId = this.id;
            var cObj = $(this);

            $.ajax({
               type:'POST',
               url:'/ajaxRequest',
               data:{id:id},
               success:function(data){
                  if(jQuery.isEmptyObject(data.success.attached)){
                    $(cObj).removeClass("like-post");
                  }else{
                    $(cObj).addClass("like-post");
                  }
               }
            });


        });      


        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });                                        
    }); 
</script>
@endsection
</x-layout>