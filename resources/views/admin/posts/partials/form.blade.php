<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach


    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>


    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" >
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2022/02/16/14/47/bird-7016926_960_720.jpg" >
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur at fugiat laboriosam! Vitae nesciunt soluta repudiandae quia consectetur a ea unde dicta, animi eos. Aliquid reiciendis odit quos illo sunt.
            Iusto placeat asperiores dicta porro libero eum doloremque incidunt, alias quod, corrupti nesciunt rem ab vitae odit vel fugiat a iure, atque natus ut ex in explicabo quas. Facilis, adipisci.
            Dolore quae corrupti aperiam omnis rem sit, officiis eligendi neque ullam consequatur error voluptatibus in nisi optio non laudantium excepturi soluta exercitationem asperiores debitis delectus. Eaque, praesentium quae. Ullam, quae.</p>
    </div>
</div>

<div class="form-group">
   {!! Form::label('extract', 'Extracto:') !!}
   {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}


   @error('extract')
        <small class="text-danger">{{ $message }}</small>
   @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}


    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
