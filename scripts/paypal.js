paypal.Buttons({
    style: {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            console.log(details)
            console.log(details.payer.email_address)
            window.location.replace("http://localhost/project_ws/project1/payments/success.php?email=" + details.payer.email_address + "&id=" + details.id)
        })
    },
    onCancel: function(data) {
        window.location.replace("http://localhost/project_ws/project1/payments/failed.php")
    }
}).render('#paypal-payment-button');