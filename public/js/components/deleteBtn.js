window.onload = function () {

let deleteBtn = document.querySelector('.order-main-card_btn');

deleteBtn.onclick = function () {
    return fetch(window.location.href, {
        headers: {
            'X-CSRF-TOKEN': document.getElementById('csrf-token').content,
        },
        method: 'delete'
    }).then(() => {
        window.location.href = window.location.origin + '/orders';
    });
};
}
