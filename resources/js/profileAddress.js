import toastr from 'toastr';

let profileAddress = (function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function clearFields() {
        $("form :input").each(function(){
            $(this).not('[data-user-profile-id]').val('');
            // $("input textarea").val('');
        });
    }

    function actionSave() {

        let form =  $('[data-card]').serialize();

            $.ajax('/api/profile-address', {
                method: 'POST',
                data: form,
                success: function (result) {
                    if (result.result) {
                        actionGet();
                        toastr.success(result.msg)
                        clearFields();
                    }

                }
            })
    }

    function actionGet() {
        let userProfileId = $('[data-user-profile-id]').val();
        $.ajax('/api/profile-address/' + userProfileId, {
            method: 'GET',
            success: function (result) {
                if (result.result) {
                    $('[data-addresses]').html(result.html);
                }
            },
            error: function (result) {

            }
        });
    }

    function actionRemove (el) {

        let addressId = $(this).data('profile-address-id');

        $.ajax('/api/profile-address/' + addressId, {
            method: 'DELETE',
            success:  function (result) {
                if(result.result){
                    actionGet();
                    toastr.info(result.msg);
                }
            }
        });

    }


    function actionEvents() {

        $(document).on('click', '[data-action="add"]', actionSave);
        $(document).on('click', '[data-action="remove"]', actionRemove);

    }

    $(document).ajaxError(function (event,responce) {
        let err;
        let message = 'Some error. Please try again later or reload page';
        if(responce.status == 422 || responce.status == 403){

            if(responce.responseJSON.message) {
                message = responce.responseJSON.message
            }

            if(
                (responce.status != 403)
                &&
                responce.responseJSON.errors
                &&
                (err =  responce.responseJSON.errors[Object.keys(responce.responseJSON.errors)[0]])
                &&
                err[0]
            ) {
                message = err[0];
            }
        }

        toastr.error(message);
    });


    let init = function () {
        // if ($('[data-page=gantt]').length == 0) {
        //     return;
        // }
        actionGet();
        actionEvents();
    };

    return {
        init: init,
    };
}());

profileAddress.init();


