@extends('adminlte::page')

@section('title', 'Mailbox')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mailbox</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Mailbox</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@stop


@section('content')
    <div class="container-fluid">
        @include('backend.component.flash-messages')
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    @include('backend.mailbox.sidebar', ['folders' => $folders])
                </div>

                <div class="col-md-9" id="messages">
                    @isset($message)
                        @include('backend.mailbox.detail', ['message' => $message])
                    @elseif(isset($compose))
                        @include('backend.mailbox.compose', [])
                    @else
                        @include('backend.mailbox.inbox', ['messages' => $messages])
                    @endisset


                </div>

            </div>

        </section>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/vendor/summernote/summernote-bs5.min.css">
    <link rel="stylesheet" href="/vendor/custom_style.css">
    {{--    <style>--}}
    {{--        code{--}}
    {{--            all: initial;--}}
    {{--        }--}}
    {{--        .gmail_attr{--}}
    {{--            margin-top: 15px;--}}
    {{--        }--}}
    {{--        .gmail_quote{--}}
    {{--            margin-top: 20px;--}}
    {{--            padding: 5px;--}}
    {{--            background-color: #e5e5e5;--}}
    {{--        }--}}
    {{--        .spinner-grow{--}}
    {{--            position: absolute;--}}
    {{--            top: 50%;--}}
    {{--            left: 50%;--}}
    {{--        }--}}
    {{--        .text-black{--}}
    {{--            color:black;--}}
    {{--        }--}}
    {{--        .card-title {--}}
    {{--            float: left;--}}
    {{--            font-size: 1.1rem;--}}
    {{--            font-weight: 400;--}}
    {{--            margin: 0;--}}
    {{--        }--}}
    {{--        .card-primary.card-outline {--}}
    {{--            border-top: 3px solid #007bff;--}}
    {{--        }--}}
    {{--        .mailbox-messages:has(> .spinner-grow) {--}}
    {{--            background-color: #cccccc;--}}
    {{--        }--}}
    {{--        .mailbox-read-info {--}}
    {{--            border-bottom: 1px solid rgba(0, 0, 0, .125);--}}
    {{--            padding: 10px;--}}
    {{--        }--}}

    {{--        .mailbox-controls.with-border {--}}
    {{--            border-bottom: 1px solid rgba(0, 0, 0, .125);--}}
    {{--        }--}}

    {{--        .mailbox-attachments {--}}
    {{--            padding-left: 0;--}}
    {{--            list-style: none;--}}
    {{--        }--}}

    {{--        .mailbox-attachments li {--}}
    {{--            border: 1px solid #eee;--}}
    {{--            float: left;--}}
    {{--            margin-bottom: 10px;--}}
    {{--            margin-right: 10px;--}}
    {{--            width: 150px;--}}
    {{--        }--}}

    {{--        .mailbox-attachment-icon {--}}
    {{--            color: #666;--}}
    {{--            font-size: 65px;--}}
    {{--            max-height: 132.5px;--}}
    {{--            padding: 20px 10px;--}}
    {{--            text-align: center;--}}
    {{--        }--}}

    {{--        .mailbox-attachment-info {--}}
    {{--            background-color: #f8f9fa;--}}
    {{--            padding: 10px;--}}
    {{--        }--}}

    {{--        .mailbox-controls {--}}
    {{--            padding: 5px;--}}
    {{--        }--}}

    {{--        .mailbox-read-message {--}}
    {{--            padding: 10px;--}}
    {{--        }--}}

    {{--        .spinner-grow {--}}
    {{--            position: absolute;--}}
    {{--            top: 50%;--}}
    {{--            left: 50%;--}}
    {{--        }--}}

    {{--        .text-black {--}}
    {{--            color: black;--}}
    {{--        }--}}

    {{--        .mailbox-messages:has(> .spinner-grow) {--}}
    {{--            background-color: #cccccc;--}}
    {{--        }--}}

    {{--        .mailbox-attachment-icon.has-img {--}}
    {{--            padding: 0;--}}
    {{--        }--}}

    {{--        .mailbox-attachment-icon, .mailbox-attachment-info, .mailbox-attachment-size {--}}
    {{--            display: block;--}}
    {{--        }--}}

    {{--        .mailbox-attachment-icon.has-img > img {--}}
    {{--            height: auto;--}}
    {{--            max-width: 100%;--}}
    {{--        }--}}
    {{--        .signature-scroll{--}}
    {{--            height: 170px;--}}
    {{--            overflow-y: scroll;--}}
    {{--        }--}}
    {{--        .checkbox-xl .form-check-input {--}}
    {{--            top: 1.2rem;--}}
    {{--            scale: 1.7;--}}
    {{--            margin-right: 0.8rem;--}}
    {{--        }--}}
    {{--    </style>--}}
@stop

@section('js')
    <script src="/vendor/summernote/summernote-bs5.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if ($('blockquote').length > 0) {
            $('blockquote').css({margin: "20px"})
        }
        $(document).on('click', '.checkbox-signature', function () {
            $('.checkbox-signature').not(this).prop('checked', false);
        });
        $('#email_account').on('change', function () {
            window.location.href = $('#email_account').find(":selected").attr('data-url');
        });
        $('.checkbox-toggle').click(function () {
            var clicks = $(this).data('clicks')
            if (clicks) {
                //Uncheck all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
            } else {
                //Check all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
            }
            $(this).data('clicks', !clicks)
        })
        $('body').on('click', '.delete-messages', function (e) {
            e.preventDefault();
            loader()
            var self = $(this);
            var url = self.attr('data-url');
            if (confirm('Are you sure you want to delete this?')) {
                var searchIDs = $("input:checkbox:checked").map(function () {
                    return $(this).val();
                }).get();

                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: {checked_data: searchIDs},

                })
                    .done(function () {
                        location.reload();
                    })
                    .fail(function () {
                        console.log("error");
                    })
                    .always(function () {
                        loader()
                        console.log("complete");
                    });


            } else {
                loader()
            }

        });

        $('body').on('click', '.refresh', function (e) {
            e.preventDefault();
            var self = $(this);
            loader()
            $.ajax({
                url: self.attr('href'),
                type: 'GET',
                dataType: 'json',
            })
                .done(function (data) {
                    $('#messages').html(data.messages);
                })
                .fail(function () {
                    console.log("error");
                })
                .always(function () {
                    $('.spinner-grow').remove()
                });
        })

        function loader() {
            if ($('.spinner-grow').length > 0) {
                $('.spinner-grow').remove()
            } else {
                $('.mailbox-messages').append(` <div class="spinner-grow text-black" role="status">
                <span class="sr-only">Loading...</span>
            </div>`)
            }
        }

        $('body').on('click', '.delete-messages', function (e) {

            if (confirm('Are you sure you want to delete this?')) {
                loader()
            }
        });
        $('.summernote').summernote({
            height: 400,
        });

        $('body').on('click', '.checked-check', function () {

            if ($(this).is(':checked')) {
                $('.' + $(this).val()).show()
            } else {
                $('.' + $(this).val()).find('input').val('')
                $('.' + $(this).val()).hide()

            }
        })


        setInterval(function () {
            $(".refresh")[0].click()
        }, 40000)
    </script>
@stop
