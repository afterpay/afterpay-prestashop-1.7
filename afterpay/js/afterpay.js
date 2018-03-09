$(document).ready(() => {

    $(".afterpay-modal-popup-trigger").on("click", function(e) {
        productModal = $("#afterpay-modal-popup");
        productModal.modal('show');
    });
});