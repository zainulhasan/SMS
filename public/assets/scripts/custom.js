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
 * Add class through ajax
 */
function add_class() {

    get_token();
    jQuery('#add_class').on('submit', (function (e) {
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
 * Edit class through ajax
 */
function edit_class() {

    get_token();
    jQuery('#edit_class').on('submit', (function (e) {
        e.preventDefault();


        jQuery.ajax({
            url: './edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {

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
 * Delete class
 * @param session_id
 */
function delete_class(class_id) {


    get_token();



    jQuery.ajax({
        url: './classes/delete',
        type: 'POST',
        data: {
            'class_id':class_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+class_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}







/**
 * Add subject through ajax
 */
function add_subject() {

    get_token();
    jQuery('#add_subject').on('submit', (function (e) {
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
 * Edit suject through ajax
 */
function edit_subject() {

    get_token();
    jQuery('#subject_edit_form').on('submit', (function (e) {
        e.preventDefault();



        jQuery.ajax({
            url: './edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {

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
 * Delete subject
 * @param subject_id
 */
function delete_subject(subject_id) {


    get_token();



    jQuery.ajax({
        url: './subjects/delete',
        type: 'POST',
        data: {
            'subject_id':subject_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+subject_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}



/**
 * Add term through ajax
 */
function add_term() {

    get_token();
    jQuery('#add_term').on('submit', (function (e) {
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
 * Edit term through ajax
 */
function edit_term() {

    get_token();
    jQuery('#edit_term').on('submit', (function (e) {
        e.preventDefault();



        jQuery.ajax({
            url: './edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {

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
 * Delete subject
 * @param subject_id
 */
function delete_term(term_id) {


    get_token();



    jQuery.ajax({
        url: './terms/delete',
        type: 'POST',
        data: {
            'term_id':term_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+term_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}






/**
 * Edit chapter through ajax
 */
function edit_chapter() {

    get_token();
    jQuery('#edit_term').on('submit', (function (e) {
        e.preventDefault();



        jQuery.ajax({
            url: './edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {

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
 * Delete chapter
 * @param chapter_id
 */
function delete_chapter(chapter_id) {


    get_token();



    jQuery.ajax({
        url: './chapters/delete',
        type: 'POST',
        data: {
            'chapter_id':chapter_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+chapter_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}






/**
 * Add teacher through ajax
 */
function add_teacher() {

    get_token();
    jQuery('#add_teacher').on('submit', (function (e) {
        e.preventDefault();

        jQuery.ajax({
            url: '/teachers/store',
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
 * Edit teacher through ajax
 */
function edit_teacher() {

    get_token();
    jQuery('#edit_teacher').on('submit', (function (e) {
        e.preventDefault();



        jQuery.ajax({
            url: 'edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {

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
 * Delete teacher
 * @param teacher_id
 */
function delete_teacher(teacher_id) {


    get_token();



    jQuery.ajax({
        url: '/teachers/delete',
        type: 'POST',
        data: {
            'teacher_id':teacher_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+teacher_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}







/**
 * Add book through ajax
 */
function add_book() {

    get_token();
    jQuery('#add_term').on('submit', (function (e) {
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
 * Edit book through ajax
 */
function edit_book() {

    get_token();
    jQuery('#edit_term').on('submit', (function (e) {
        e.preventDefault();



        jQuery.ajax({
            url: './edit/store',
            type: 'POST',

            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function () {

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
 * Delete book
 * @param book_id
 */
function delete_book(book_id) {


    get_token();



    jQuery.ajax({
        url: '/books/delete',
        type: 'POST',
        data: {
            'book_id':book_id,
        },

        success: function (res) {
            if (res == 1) {


                $('#message_box').append(get_message("Record Deleted Successfully."));
                $('.form-control').val('');
                $('#row'+book_id).slideUp();



            } else {

                $('#message_box').append(get_message("You have some form errors. Please check below."));
            }

        }
    });

}



$(document).ready(function () {

    add_session();
    edit_session();


    add_class();
    edit_class();


    add_subject();
    edit_subject();


    add_term();
    edit_term();




    add_teacher();
    edit_teacher();


    add_book();
    edit_book();

})