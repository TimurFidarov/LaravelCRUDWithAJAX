window.onload = function () {
    let select = document.getElementById('status');
    select.onchange = function () {
        console.log('here');
        fetch(window.location.href + '?status=' + select.value, {
            headers: {
                'X-CSRF-TOKEN': document.getElementById('csrf-token').content,
            },
            method: 'PATCH',
        });
    }
}
