<div>


     {!! Form::open(['route' => 'admin.store', 'files' => true]) !!}
    

        <div class="m-3 pb-1">
            {!! Form::label('title', 'Title', [
                'class'=>'form-control text-primary',
                
                ]) !!}
        
            {!! Form::text('title', '' ,[
                 'class'=>'form-control',
                 'placeholder'=>'Enter the Title for the post'
            ]) !!}
        </div>

        <div class="m-3 pb-1">
            {!! Form::label('body', 'Post Description', [
                'class'=>'form-control text-primary',
                
                ]) !!}
    

            {!! Form::textarea('body','' ,[
                'row'=>'20',
                'cols'=>'70',
                'clas'=> 'form-control'
            ]) !!}
        </div>


        <div class="m-3 pb-1">
            {!! Form::label('image', 'Post image', [
                'class'=>'form-control text-primary',
                
                ]) !!}
        
            {!! Form::file('post_image',[
                 'class'=>'form-control',
            ]) !!}
        </div>


        {!! Form::submit('save', [
            'class'=>'btn btn-primary',
        ]) !!}
    
    {!! Form::close() !!}

    

    {{-- { <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    
        <input type="text" name="title">
        <input type="text" name="body">
        <input type="file" name="post_image">
        <button type="submit">submit</button>

    </form>  --}}


</div>