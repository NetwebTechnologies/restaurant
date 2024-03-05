function packageLoader(show = "show") {
    if (show == "show") {
        // $("#loader").show();
        $(document).find('body').css('opacity', '0.4');
    } else {
        // $("#loader").hide();.
        $(document).find('body').attr('style', '');
    }
}
function ajaxFormSubmission(
    form,
    resetForm = true,
    noMessage = false,
    loader_bool = true,
    prevent = true,
    async = true
) {
    event.preventDefault();
    $(document).find('.alert-message').removeClass('alert-success').removeClass('alert-danger').html('');
    var res;
    if (loader_bool) packageLoader();
    if (prevent) event.preventDefault();
    var formdata = new FormData(form[0]);
    var url = form.attr("action");
    form.find('button[type="button"]').prop("disabled", true);
    $.ajax({
        async: async,
        url: form.attr("action"),
        enctype: "multipart/form-data",
        data: formdata,
        type: form.attr("method"),
        processData: false,
        contentType: false,
        success: function (response) {
            if (loader_bool) {
                packageLoader("stop");
            }
            formInputErrorsClear(form);
            if (response.status) {
                $(document).find('.alert-message').addClass('alert').addClass('alert-success').html(response.message);
            }
            if (response.modal != undefined) {
                $("#" + response.modal).modal("hide");
                if (response.table != undefined) {
                    datatableRefresh(response.table);
                }
            }
            if (resetForm) {
                form[0].reset();
            }
            datatableRefresh();
            if (response.redirect !== undefined) {
                window.location.href = response.redirect;
            }
            setTimeout(() => {
                $(document).find('.alert-message').removeClass('alert').removeClass('alert-success').removeClass('alert-danger').html('');
                window.location.reload();
            }, 1500);

        },
        error: function (error) {
            packageLoader("stop");
            console.error(error);
            formInputErrorsClear(form);
            if (error.responseJSON != null) {
                if (typeof error.responseJSON.errors == "object") {
                formInputErrors(form, error.responseJSON.errors);
                } else if (typeof error.responseJSON.message == "string") {
                    $(document).find('.alert-message').addClass('alert').addClass('alert-danger').html(error.responseJSON.message);
                } else {
                    $(document).find('.alert-message').addClass('alert').addClass('alert-danger').html(error.responseJSON.message);
                }
            }
            setTimeout(() => {
                $(document).find('.alert-message').removeClass('alert').removeClass('alert-success').removeClass('alert-danger').html('');
            }, 3000);
        },
        complete: function () {
            packageLoader("stop");
            form.find('button[type="button"]').prop("disabled", false);
        },
    });

    return res;
}

function datatableRefresh(table) {
    if ($("#" + table).length > 0) {
        $("#" + table)
        .DataTable()
        .ajax.reload(null, false);
    } else if ($("." + table).length > 0) {
        $("." + table)
        .DataTable()
        .ajax.reload(null, false);
    } else {
        $(".dataTable").DataTable().ajax.reload(null, false);
    }
}

function formInputErrors(form, errors) {
    if (typeof errors != undefined) {
        $.each(errors, function (key, value) {
            form
                .find('[name="' + key + '"]:not([no-focus])')
                .addClass("is-invalid")
                .focus()
                .parents('.form-group')
                .find(".invalid-feedback")
                .html(value);
            form
                .find('[name="' + key + '"]')
                .addClass("is-invalid")
                .parents('.form-group')
                .find(".invalid-feedback")
                .html(value);
        });
    }
}
function formInputErrorsClear(form) {
    form.find(".form-control, select, textarea").removeClass("is-invalid");
    form.find(".invalid-feedback").empty();
}

function modalShow( route, method = "get", title = "Modal", data = []) {
    var modal = $("#myModal").modal({
        backdrop: "static",
        keyboard: false,
    });
    get_modal_content(modal, route, method, title, data);
}
function modalHide(modal = null) {
    $("#myModal").modal("hide");
}
function get_modal_content(modal, route, method, title, data) {
    let htmlSelector = modal.find(".modal-body");
    modal.modal("show");
    modal.find(".modal-title").text(title);
    packageLoader('show');
    htmlSelector.html("Loading ...");
    $.ajax({
        type: method,
        url: route,
        data: data,
        success: function (res) {
            packageLoader('hide');
            if (res.html != undefined) {
                htmlSelector.html(res.html);
                modal.modal("show");
            } else {
                htmlSelector.html(res);
                modal.modal("show");
            }
        },
    });
}
