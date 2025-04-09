@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact details</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact Details</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @include('backend.component.flash-messages')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Contact Details</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('settings.store', 'contact') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">

                                        @if(isset($setting))
                                            @php
                                                $key = 0;
                                            @endphp
                                            @foreach($setting as $set)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="title">Address Heading</label>
                                                            <input type="text" class="form-control"
                                                                   id="address" value="{{ $set['heading'] ?? null  }}" name="settings[{{$key}}][heading]" placeholder="Heading">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="title">Map</label>
                                                            <input type="text" class="form-control"
                                                                   id="map" value="{{ $set['map'] ?? null  }}" name="settings[{{$key}}][map]" placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1....">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="title">Address</label>
                                                            <input type="text" class="form-control"
                                                                   id="address" value="{{ $set['address'] ?? null  }}" name="settings[{{$key}}][address]" placeholder="Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email one</label>
                                                            <input type="text" class="form-control"
                                                                   id="email" value="{{ $set['email'] ?? null  }}" name="settings[{{$key}}][email]" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="text" class="form-control"
                                                                   id="phone"  value="{{ $set['phone'] ?? null  }}"  name="settings[{{$key}}][phone]" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="fax">Fax</label>
                                                            <input type="text" class="form-control"  id="fax" value="{{ $set['fax'] ?? null  }}" name="settings[{{$key}}][fax]" placeholder="Fax">
                                                        </div>
                                                    </div>
                                                    @if(!$loop->first)
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-3">
                                                                <button class="btn btn-danger btn-sm remove-address mt-3" type="button">Remove</button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                @php
                                                    $key = $key + 1;
                                                @endphp
                                            @endforeach
                                        @endif

                                        <div class="address-div"></div>
{{--                                        <a href="#" class="add-more-address  ">+ Add more address</a>--}}


{{--                                        <h2>Get In Touch</h2>--}}
{{--                                        @if(isset($setting['business_times']))--}}
{{--                                            @for($i=0; $i <= count($setting['business_times']); $i++)--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="title">Business Hours:</label>--}}
{{--                                                    <input type="text" class="form-control " id="title" value="{{ isset($setting['business_times'][$i]) ? $setting['business_times'][$i] : null }}" name="business_times[]" placeholder="Timing">--}}
{{--                                                </div>--}}
{{--                                            @endfor--}}
{{--                                        @else--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for="title">Business Hours:</label>--}}
{{--                                                <input type="text" class="form-control " id="title" value="" name="business_times[]" placeholder="Timing">--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                        <div class="timing-div"></div>--}}
{{--                                        <a href="#" class="add-more float-right">+ Add more</a>--}}

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $('body').on('click','.add-more', function(e) {
            e.preventDefault();
            $('.timing-div').append(`<div class="form-group">
                            <input type="text" class="form-control " id="title" value="" name="business_times[]" placeholder="Timing">
                        </div>`)
        })
        $('body').on('click', '.add-more-address', function (e) {
            e.preventDefault();
            var length = $('input').length
            $('.address-div').append(`<hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Address Heading</label>
                                                <input type="text" class="form-control"
                                                       id="heading" value="" name="settings[${length}][heading]" placeholder="Heading">
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="title">Map</label>
                                                            <input type="text" class="form-control"
                                                                   id="map"   name="settings[${length}][map]" placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1....">
                                                        </div>
                                                    </div>
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Address</label>
                                                <input type="text" class="form-control"
                                                       id="address" value="" name="settings[${length}][address]" placeholder="Address">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email one</label>
                                                    <input type="text" class="form-control"
                                                           id="email" value="" name="settings[${length}][email]" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control"
                                                           id="phone"  value=""  name="settings[${length}][phone]" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fax">Fax</label>
                                                    <input type="text" class="form-control"  id="fax" value="" name="settings[${length}][fax]" placeholder="Fax">
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group mt-3">
                                                    <button class="btn btn-danger btn-sm remove-address mt-3" type="button">Remove</button>
                                                </div>
                                            </div>
                                        </div>`)
        })

        $('body').on('click','.remove-address', function(e) {
            e.preventDefault();
            $(this).closest('.row').remove();
        })
    </script>
    @stop
