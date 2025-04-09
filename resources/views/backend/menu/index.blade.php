@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Menu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Menu</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <form action="#" method="post" id="add-item"  class="border p-2">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Label</label>
                                                    <input type="text" name="label_menu" class="form-control" placeholder="Enter Label Name...">
                                                    <div class="error text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Link</label>
                                                    <input type="text" name="link" class="form-control" placeholder="Enter link, /example/etc ">
                                                    <div class="error text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Add item
                                        </button>
                                    </form>
                                </div>
                                <div class="col-md-8">
                                    <div class="dd" id="nestable">
                                        <ol class="dd-list">
                                            @forelse($menus as $menu)
                                                <li class="dd-item dd3-item" data-id="{{ $menu->id }}" data-label="{{ $menu->label_menu }}"
                                                    data-url="{{ $menu->link }}">
                                                    <div class="item_sh">
                                                        <div class="d-flex align-items-center">
                                                            <div class="dd-handle dd3-handle w-100"><i class="fa fa-list"></i>
                                                                <span>{{ $menu->label_menu }}</span></div>
                                                            <button class="btn-sm btn btn-primary edit-btn">Edit</button>
                                                        </div>
                                                        <div class="item-settings d-none">
                                                            <form action="" class="pr-4 pl-4 pb-2 pt-2 border">
                                                                <div class="from-group">
                                                                    <label class="mb-0">Label Name</label>
                                                                    <input type="text" name="navigation_label" class="form-control"
                                                                           value="{{ $menu->label_menu ?? '' }}"
                                                                           placeholder="Enter Label Name...">
                                                                    <div class="error text-danger"></div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="mb-0">Link</label>
                                                                    <input type="text" name="navigation_link" class="form-control"
                                                                           value="{{ $menu->link ?? '' }}"
                                                                           placeholder="Enter URL. /example/etc..">
                                                                    <div class="error text-danger"></div>
                                                                </div>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn-xs btn btn-primary close-btn">Update</button>
                                                                    <a href="{{ route('menu.delete', $menu->id) }}" class="btn-xs btn btn-danger delete-btn">Remove</a>
                                                                    <button type="button" class="btn-xs btn btn-default close-btn">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    @if($menu->children->count() > 0)
                                                        @include('backend.menu.list', ['ch_menus' => $menu->children])
                                                    @endif
                                                </li>
                                            @empty
                                            @endforelse
                                        </ol>
                                    </div>
                                    <form action="{{ route('menu.update') }}" method="post">
                                        @csrf
                                        <input type="hidden" id="nestable-output" name="menu">
                                        <button type="submit" class="btn btn-primary">Save Menu</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css">

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js"></script>
    <script>
        var updateOutput = function () {
            $('#nestable-output').val(JSON.stringify($('#nestable').nestable('serialize')));
        };

        $('#nestable').nestable({
            maxDepth:2
        }).on('change', updateOutput);

        updateOutput();

        $("#add-item").submit(function (e) {
            e.preventDefault();
            var status = false;
            id = Date.now();
            var label = $("#add-item  [name='label_menu']");
            var url = $("#add-item  [name='link']");
            if (url.val() == ""){
                 url.closest('.form-group').find('.error').html('Link field required');
                status = true;
            }
            if (label.val() == ""){
                label.closest('.form-group').find('.error').html('Name field required');
                status = true;
            }
            if(status){return;}

            var item = `<li class="dd-item dd3-item" data-id="${id}" data-label="${label.val()}" data-url="${url.val()}">
                            <div class="d-flex align-items-center">
                                <div class="dd-handle dd3-handle w-100"><i class="fa fa-list"></i>
                                    <span>${label.val()}</span></div>
                                <button class="btn-sm btn btn-primary edit-btn">Edit</button>
                            </div>
                            <div class="item-settings d-none">
                                <form action="#" class="pr-4 pl-4 pb-2 pt-2 border">
                                    <div class="from-group">
                                        <label class="mb-0">Label Name</label>
                                        <input type="text" name="navigation_label" class="form-control" value="${label.val()}" placeholder="Enter Label Name...">
                            <div class="error text-danger"></div>
                            </div>
                            <div class="form-group">
                                <label class="mb-0">Link</label>
                                <input type="text" name="navigation_url" class="form-control" value="${url.val()}" placeholder="Enter URL. /example/etc..">
                            <div class="error text-danger"></div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn-xs btn btn-primary close-btn">Update</button>
                            <button type="button" class="btn-xs btn btn-danger remove-item">Remove</button>
                            <button type="button" class="btn-xs btn btn-default close-btn">Close</button>
                        </div>
                    </form>
                </div>
            </li>`;


            $("#nestable > .dd-list").append(item);
            $("#nestable").find('.dd-empty').remove();
            label.val('');
            url.val('');
            $('.error').html('');
            updateOutput();

        });

        $("body").delegate(".edit-btn, .close-btn", "click", function (e) {
            var item_setting = $(this).closest(".dd-item").find(".item-settings");
            if (item_setting.hasClass("d-none")) {
                item_setting.removeClass("d-none");
            } else {
                item_setting.addClass("d-none");
            }
        });
        $("body").delegate(".remove-item", "click", function (e) {
            $(this).closest(".dd-item").remove();
            updateOutput();
        });

        $("body").delegate("input[name='navigation_label']", "change paste keyup", function (e) {
            $(this).closest(".dd-item").data("label", $(this).val());
            $(this).closest(".item_sh").find(".dd3-handle span").html($(this).val());
        });

        $("body").delegate("input[name='navigation_link']", "change paste keyup", function (e) {
            $(this).closest(".dd-item").data("url", $(this).val());
        });

        $('body').delegate('.delete-btn', 'click', function (e) {
            e.preventDefault();
            var self = $(this);
            $.ajax({
                url: self.attr('href'),
                type: 'get',
                dataType: 'json',
            })
                .done(function() {
                    self.closest(".dd-item").remove();
                    updateOutput();
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
        })

    </script>
@endsection