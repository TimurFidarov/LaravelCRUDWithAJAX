window.onload = function () {
    //select  status

    let select = document.getElementById('status');
    select.onchange = function () {
        fetch(window.location.href + '?status=' + select.value, {
            headers: {
                'X-CSRF-TOKEN': document.getElementById('csrf-token').content,
            },
            method: 'PATCH',
        });
    }



    //delete btn

    let deleteBtn = document.querySelector('.order-main-card_btn');

    deleteBtn.onclick = function ()  {
        return fetch(window.location.href, {
            headers: {
                'X-CSRF-TOKEN': document.getElementById('csrf-token').content,
            },
            method: 'delete'
        })
            .then(() => window.location.href =  '/orders');
    }

}
