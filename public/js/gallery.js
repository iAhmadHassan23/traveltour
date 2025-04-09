function loadCSS(href) {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.crossorigin = 'anonymous';
    link.referrerpolicy = 'no-referrer';
    link.href = href;
    document.head.appendChild(link);
}
loadCSS('/css/gallery.css');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('body').on('click', '.upload-image', function (e) {
    e.preventDefault();
    var self = $(this);
    let form = self.closest('form')
    var formData = new FormData(form[0]);
    let btn_value = self.html();
    $.ajax({
        url: form.attr('action'),
        method: 'post',
        data: formData,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function () {
            // $('#save').attr('disabled','disabled');
            $('.is-invalid').closest('div').find('.invalid-feedback').remove()
            $('.is-invalid').removeClass('is-invalid')
            btn_rand(self, btn_value, 'disabled')
        },
        success: function (data) {
            if (typeof data.id != 'undefined') {
                $('.append-img').prepend(`<div class="col-md-3">
                                    <div class="card">
                                           <div class="position-relative p-1 ">
                                               <div class="img ">
                                                   <button type="button" class="btn btn-sm btn-primary useimage" data-name="${data.image}">Use this</button>
                                                   <img src="/media/${data.url}"
                                                        class="w-100 shadow-1-strong rounded img-thumbnail"/>
                                                   <p>${data.image}</p>
                                                   <a class="remove-image" href="${data.remove_rul}" style="display: inline;">&#215;</a>
                                                   <form action="${data.replace_rul}" method="post">
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
                               </div>`)
            } else {
                self.closest('.img').find('img').attr('src', data.url)
            }

        },
        error: function (data) {
            btn_rand(self, btn_value, 'enabled')
            var count = 0;
            $.each(data.responseJSON.errors, function (key, value) {
                var input = '#' + key;
                if (count == 0) {

                    // if ($(input).length) {

                    //     $('html, body').animate({
                    //         scrollTop: $(input).offset().top
                    //     }, 1000)
                    // }
                }
                $(input).addClass('is-invalid');
                $(input).closest('div').append(`<span class="invalid-feedback d-block" role="alert">
                                        <strong>${value}</strong>
                                    </span>`)
                count++;
            });

        },
        complete: function () {
            btn_rand(self, btn_value, 'enabled')
        }
    })

});


$('body').on('click', '.replace-image', function(e){
    e.preventDefault();
    var self = $(this);
    let form = self.closest('form')
    var formData = new FormData(form[0]);
    let btn_value = self.html();

    $.ajax({
        url: form.attr('action'),
        method: 'post',
        data: formData,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function() {
            // $('#save').attr('disabled','disabled');
            $('.is-invalid').closest('div').find('.invalid-feedback').remove()
            $('.is-invalid').removeClass('is-invalid')
            btn_rand(self, btn_value, 'disabled')
        },
        success: function(data) {
            self.closest('.img').find('img').attr('src', data.url)
        },
        error: function(data) {
            btn_rand(self, btn_value, 'enabled')
            var count = 0;
            $.each(data.responseJSON.errors, function(key, value) {
                var input = '#' + key;

                $(form).find(input).addClass('is-invalid');
                $(form).find(input).closest('div').append(`<span class="invalid-feedback d-block" role="alert">
                                        <strong>${value}</strong>
                                    </span>`)
                count++;
            });

        },
        complete: function() {
            btn_rand(self, btn_value, 'enabled')
        }
    })

});



$('body').on('click', '.remove-image', function (e) {
    e.preventDefault();
    var self = $(this);
    if (confirm('Are you sure you want to delete this?')) {
        $.ajax({
            url: self.attr('href'),
            type: 'DELETE',
            dataType: 'json',
        })
            .done(function () {
                self.closest('.position-relative').remove();
            })
    }
})

function btn_rand(self, btn_value, action) {
    if (action == 'disabled') {
        self.html('Loading...');
        self.attr('disabled', 'disabled');
    } else {
        self.html(btn_value);
        self.removeAttr('disabled');
    }
}

$('body').on('click', '.gallery_model_btn', function () {
    var self = $(this)
    $('.img-section-id').val(self.attr('data-id'));

})

$('body').on('click', '.useimage', function () {
    var self = $(this)
    $('.useimage').removeClass('btn-success');
    $('.useimage').addClass('btn-primary');
    self.addClass('btn-success')

    var image_preview = $('[data-id=' + $('.img-section-id').val() + ']')
    var closesection = image_preview.closest('.image_section');
    closesection.find('.full_image').val(self.attr('data-name'))
    var img = $('<img class="img-thumbnail" width="250">');
    img.attr('src', '/media/' + self.attr('data-name'));
    closesection.find('.image-preview').html(img)
    closesection.find('.remove-btn').remove();
    closesection.append(`<div class="form-group remove-btn">
                        <button type="button" class="btn btn-sm btn-danger mt-2 mb-2 remove-upload-image w-100">Remove Image</button>
                    </div>`)
})

$('body').on('click', '.remove-upload-image', function(e){
    e.preventDefault();
    var self = $(this)
    var section = self.closest('.image_section')
    section.find('.full_image').val('');
    section.find('img').remove();
    self.closest('.remove-btn').remove();
})
var page = 2;
var status_pagination = true;

function loadMoreData() {
    if (status_pagination) {
        status_pagination = false;
        var route = $('.pg-data').attr('data-pagination-route');
        var queryString = 'page=' + page;

        // Check if there are existing query parameters
        var existingQuery = window.location.search;
        if (existingQuery) {
            // Remove any existing question mark from the existing query
            existingQuery = existingQuery.replace('?', '');
            // Append the new query parameter using &
            queryString = existingQuery + '&' + queryString;
        }

        $.ajax({
            url: route + '?' + queryString,
            method: 'GET',
            data: {q: $('#search').val()},
            success: function (data) {
                if (data.data_length > 0) {
                    $('.pg-data').append(data.html);
                    page++;
                    status_pagination = true;
                } else {
                    // No more data
                }
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }
}

$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
        loadMoreData();
    }
});

$('.gallery_images ').scroll(function () {
    // Check if the user has scrolled to the bottom of the modal
    var modalBody = $('.gallery_images ');
    if (modalBody.scrollTop() + modalBody.innerHeight() >= modalBody[0].scrollHeight - 100) {
        console.log('working')
        loadMoreData();
    }
});

$('body').on('input', '#search', function(){
    var route = $('.pg-data').attr('data-pagination-route');
    $.ajax({
        url: route,
        method: 'GET',
        data: {q: $('#search').val()},
        success: function (data) {
            if (data.data_length > 0) {
                $('.pg-data').html(data.html);
                page = 2;
                status_pagination = true;
            } else {
                // No more data
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
})
