let headers = new Headers();

headers.append("Content-Type", "application/json");

headers.append("Authorization", "Bearer 6VpIIscMfktGjobD3daXDujFY0Sz");

​

fetch("https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate", {

    method: 'POST',

    headers,

    body: JSON.stringify({

        "ShortCode": 600995,

        "CommandID": "CustomerPayBillOnline",

        "amount": "100",

        "MSISDN": "254705912645",

        "BillRefNumber": "1234",

    })

})

.then(response => response.text())

.then(result => console.log(result))

.catch(error => console.log(error));