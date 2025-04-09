$(function(){
    $('.table').dataTable({});

    $(document).on('click', '.bdg-index-status', function (event) {
        event.preventDefault();
        var self = $(this)
        $.ajax({
            url: self.attr('href'),
            type: 'GET',
            success: function (response) {
                self.html(response)
            }
        });
    })

    $("#sort").sortable({
        items: "tr",
        cursor: 'move',
        opacity: 0.6,
        update: function () {
            sectionOrderByToServer();
        }
    });

    function sectionOrderByToServer() {

        var order = [];
        var token = $('meta[name="csrf-token"]').attr('content');

        $('tr.row1').each(function (index, element) {
            $(this).find('.order_by').html(index + 1)
            order.push({
                id: $(this).attr('data-id'),
                position: index + 1
            });
        });

        $.ajax({
            type: "POST",
            dataType: "json",
            url: $('#sort').data('sort_url'),
            data: {
                order: order,
                _token: token
            },
            success: function (response) {
                if (response.status == "success") {
                    console.log(response);
                } else {
                    console.log(response);
                }
            }
        });
    }
    // if (typeof sortable() == 'function') {
    //     alert('working');
    //     $("#sortable").sortable({
    //         items: "tr",
    //         cursor: 'move',
    //         opacity: 0.6,
    //         update: function () {
    //             sendOrderByToServer();
    //         }
    //     });
    // }




})
