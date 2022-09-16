<div class="mb-2 p-1">
    <label for="input-title" class="form-label">Title</label>
    <input type="text" class="form-control" id="input-title" value="{{ old('title', $comic->title)}}" required name="title">
</div>
@error('title')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-price" class="form-label">Price</label>
    <input type="number" class="form-control" id="input-price" value="{{old('price', $comic->price)}}" required name="price">
</div>
@error('price')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-series" class="form-label">Series</label>
    <input type="text" class="form-control" id="input-series" value="{{old('series', $comic->series)}}" required name="series">
</div>
@error('series')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-sale_date" class="form-label">Sale_date</label>
    <input type="date" class="form-control" id="input-sale_date" value="{{old('sale_date', $comic->sale_date)}}" required name="sale_date">
</div>
@error('sale_date')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-type" class="form-label">Type</label>
    <input type="text" class="form-control" id="input-type" value="{{old('type', $comic->type)}}" required name="type">
</div>
@error('type')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" id="input-thumb" value="{{old('thumb', $comic->thumb)}}" required name="thumb">
</div>
@error('thumb')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

<div class="mb-2 p-1">
    <label for="input-description" class="form-label">Description</label>
    <textarea class="form-control" required name="description" id="input-description" cols="30" rows="10">{{old('description', $comic->description)}}</textarea>
</div>
@error('description')
    <div class="alert alert-danger">
    {{$message}}
    </div>
@enderror  

    <button type="submit" class="btn btn-primary">Submit</button>