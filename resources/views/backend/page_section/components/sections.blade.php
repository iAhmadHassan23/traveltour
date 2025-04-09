<section class="content">
    <div class="container-fluid">
        <form action="">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Section designs</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach(content_sections() as $key => $image)
                                    <div class='col-sm-4  mt-4'>
                                        <div class="position-relative bg-gray elevation-2" style="height: 180px">
                                            <input type="radio" name="section" id="{{$key}}"
                                                   class="d-none imgbgchk" value="{{$key}}">
                                            <label for="{{$key}}">
                                                <img src="{{$image}}" alt="Image 1" class="h-100 img-fluid  img-popup ">
                                                <div class="tick_container">
                                                    <div class="tick"><i class="fa fa-check"></i></div>
                                                </div>
                                            </label>
                                            <div class="ribbon-wrapper ribbon-lg">
                                                <div class="ribbon bg-success text-lg">
                                                    {{ str_replace('_',' ', $key) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm btn-block mt-3">
                                Save
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</section>
@section('css')
    <link rel="stylesheet" href="/css/custom.css">
@stop

