<div class="modal fade gallery_images" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Search" id="search" data-search>
                    </div>
                </div>
                <input type="hidden" value="" class="img-section-id">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('gallery.image.upload') }}" method="post">
                            <div class="input-group mb-2">
                                <input type="file" class="form-control" id="image" name="image">
                                <input type="text" class="form-control" id="image_name" name="image_name" placeholder="image name">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary upload-image">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row append-img pg-data" data-pagination-route="{{ route('gallery.index') }}">
                    @include('backend.component.gallery_images', ['gallery_images' => $galleries])
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>

    </script>
@endpush
