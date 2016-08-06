/***********************************************************************
 *                                                                     *
 *                      Custom Scripts                                 *
 *                                                                     *
 **********************************************************************/


/**
 * Add Session through ajax
 */
function add_session() {

    get_token();
    jQuery('#add_form').on('submit', (function (e) {
        e.preventDefault();

        jQuery.ajax({
            url: './store',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,

            success: function (res) {
                if (res == 1) {


                    $('#message_box').append(get_message("Record Added Successfully."));
                    $('.form-control').val('');

                } else {

                    $('#message_box').append(get_message("You have some form errors. Please check below."));
                }

            }
        });
    }));


}


/**
 * Edit Session through ajax
 */
function edit_session() {

    get_token();
    jQuery('#edit_form').on('submit', (function (e) {
        e.preventDefault();


        jQuery.ajax({
            url: './edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {
                jQuery('#AddCat').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
                jQuery('#overlay').show();
            },
            success: function (res) {
                if (res == 1) {


                    $('#message_box').append(get_message("Record Edit Successfully."));
                    $('.form-control').val('');

                } else {

                    $('#message_box').append(get_message("You have some form errors. Please check below."));
                }

            }
        });
    }));


}


function get_token() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}
/**
 * Delete Session
 * @param session_id
 */
function delete_session(session_id) {
    get_token();



    jQuery.ajax({
        url: './session/delete',
        type: 'POST',
        data: {
            'session_id':session_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+session_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}


/**
 * Generate Message to display on page after ajax request completed.
 * @param msg
 * @returns {string}
 */
function get_message(msg) {
    var alertVal = "";
    alertVal += "<div class=\"alert alert-danger\">";
    alertVal += "<button class=\"close\" data-close=\"alert\"><\/button>";
    alertVal += msg;
    return alertVal
}








/**
 * Add Session through ajax
 */
function add_class() {

    get_token();
    jQuery('#add_form').on('submit', (function (e) {
        e.preventDefault();

        jQuery.ajax({
            url: './store',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,

            success: function (res) {
                if (res == 1) {


                    $('#message_box').append(get_message("Record Added Successfully."));
                    $('.form-control').val('');

                } else {

                    $('#message_box').append(get_message("You have some form errors. Please check below."));
                }

            }
        });
    }));


}


/**
 * Edit Session through ajax
 */
function edit_class() {

    get_token();
    jQuery('#edit_form').on('submit', (function (e) {
        e.preventDefault();


        jQuery.ajax({
            url: './edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {
                jQuery('#AddCat').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
                jQuery('#overlay').show();
            },
            success: function (res) {
                if (res == 1) {


                    $('#message_box').append(get_message("Record Edit Successfully."));
                    $('.form-control').val('');

                } else {

                    $('#message_box').append(get_message("You have some form errors. Please check below."));
                }

            }
        });
    }));


}


/**
 * Delete Session
 * @param session_id
 */
function delete_class(session_id) {
    get_token();



    jQuery.ajax({
        url: './session/delete',
        type: 'POST',
        data: {
            'session_id':session_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+session_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}











$(document).ready(function () {

    add_session();
    edit_session();


})