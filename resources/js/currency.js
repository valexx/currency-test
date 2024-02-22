jQuery(function ($) {
    $("input[name^='currency']").on('click', function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        let currency_id = this.name.split("-")[2];

        let status = parseInt(this.value) === 1 ? 0 : 1;
        let checked = $('#currency-' + currency_id).is(':checked');

        let formData = {
            status: status,
        };
        let type = 'PATCH';
        let ajaxUrl = 'currency/' + currency_id;
        $.ajax({
            type: type,
            url: ajaxUrl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#currency-' + currency_id).prop("checked", checked);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});
