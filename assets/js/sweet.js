function showMsgErrors(textMsg) {
    swall.fire({
        icon: 'error',
        tittle: textMsg,
        showConfirmButton: false,
        timer: 3000
    });
}

function showMsgSuccess(textMsg) {
    swall.fire({
        icon: 'success',
        tittle: textMsg,
        showConfirmButton: false,
        timer: 3000
    });
}