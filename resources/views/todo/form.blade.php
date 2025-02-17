<div class="my-2">
    <input type="text" name='title' value="{{$todo->title ?? ''}}" class="form-control @error('title') is-invalid @enderror" placeholder="title">
    @error('title')
    <div style='color : red'>
        {{ $message }}
    </div>
    @enderror
</div>
<div class="my-2">
    <textarea id="" name='description'  class="form-control @error('description') is-invalid @enderror" placeholder="description">{{$todo->description ?? ''}}</textarea>
    @error('description')
    <div style='color : red'>
        {{ $message }}
    </div>
    @enderror
</div>