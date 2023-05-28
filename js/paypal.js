paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '10.00' // valor a cobrar cobrar
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        console.log('Pago aprobado: ' + details);
      });
    }
  }).render('#paypal-button-container');