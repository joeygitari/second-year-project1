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
            window.location.replace("http://localhost/project_ws/project1/payments/success.php")
        })
    },
    onCancel: function(data) {
        window.location.replace("http://localhost/project_ws/project1/payments/failed.php")
    }
}).render('#paypal-payment-button');