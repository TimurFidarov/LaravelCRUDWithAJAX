async function fetchData($sort = null) {
    return fetch(window.location.href, {
        headers : {"Accept":"application/json"}
    }).then(response => response.json())
}

fetchData().then(function(data) {
    let orderContainer = document.querySelector('.orders-container');
    orderContainer.innerHTML="";
    data.forEach(order => {
        let orderCard = document.createElement('div');
        orderCard.classList.add('order-card');

        // Name field
        let orderNameField = document.createElement('div');
        orderNameField.classList.add('order-card_field');
        orderNameField.classList.add('order-card_name-field');
        orderNameField.innerHTML = '<a href="/orders/' + order.id +'">Название:'+ order.name +'</a>'

        //price Field
        let orderPriceField = document.createElement('div');
        orderPriceField.classList.add('order-card_field');
        orderPriceField.innerHTML = 'Цена:'+ order.price;


        //Status field
        let orderStatusField = document.createElement('div');
        orderStatusField.classList.add('order-card_field');
        let status;
        switch(order.status) {
            case null:
                status = 'Отменен';
                break;
            case true:
                status = 'Ожидает';
                break;
            case false:
                status = 'В пути';
                break;
        }
        orderStatusField.innerHTML = 'Статус:'+ status;



        //Svg delete icon
        orderCard.innerHTML = '<svg class="btn order-card_delete-btn" xmlns="http://www.w3.org/2000/svg" height="15"\n' +
            '                             viewBox="0 0 24 24"\n' +
            '                             width="15">\n' +
            '                            <path d="M0 0h24v24H0z" fill="none"/>\n' +
            '                            <path fill="red" d="M14.59 8L12 10.59 9.41 8 8 9.41\n' +
            '                             10.59 12 8 14.59 9.41 16 12 13.41 14.59\n' +
            '                              16 16 14.59 13.41 12 16 9.41 14.59 8zM12\n' +
            '                               2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47\n' +
            '                                10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>';



        //Append order fields
        orderCard.append(orderNameField);
        orderCard.append(orderPriceField);
        orderCard.append(orderStatusField);

        //Append Order card
        orderContainer.append(orderCard);
        console.log(order);
    })
});

