@foreach($gallery_images as $gallery)
    <div class="col-md-3" data-filter-item data-filter-name="{{$gallery->image}}">
        <div class="card">
            <div class="position-relative p-1 ">
                <div class="img ">
                    <button type="button" class="btn btn-sm btn-primary useimage" data-name="{{$gallery->image}}">Use this</button>
                    <img src="{{ asset('media/'.$gallery->image) }}"
                         class="w-100 shadow-1-strong rounded img-thumbnail"/>
                    <p>{{ $gallery->image }}</p>
                    <a class="remove-image" href="{{ route('remove.gallery.image', $gallery->id) }}" style="display: inline;">&#215;</a>
                    <form action="{{ route('gallery.image.replace', $gallery->id) }}" method="post">
                        <div class="input-group mb-2">
                            <input type="file" class="form-control" id="image" name="image">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-primary replace-image">Replace</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
