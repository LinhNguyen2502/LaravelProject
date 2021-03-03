// console.log(axios)
$('#checkout').click(function() {
    let name = $('#name').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let address = $('#address').val();

    axios({
        method: 'post',
        url: '/cart/checkout',
        data: {
            name: name,
            email: email,
            phone: phone,
            address: address,
        }
    }).then(function (response) {
        if(response.data.status === true){
            alert('Ban da mua hang thanh cong!');
            window.location.reload(true);
        }
    })
        .catch(function (error) {
            console.log(error);
    });
})
