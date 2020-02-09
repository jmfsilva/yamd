
function getCookie(cname) {
    return true;
}

function setCookie(cname, cvalue, exdays) {
}

$('#cookiesModal')
.on('hide.bs.modal', function (e) {
    setCookie("CONSENT", true, 1000);
}).modal({
    show: !getCookie("CONSENT")
})