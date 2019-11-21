<html>

<head>
  <script type="text/javascript" src="../lib/jquery-3.4.1.min.js"></script>
  
  <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
  <!-- <script src="../controler/emailnotification.js"></script> -->
  <style>
    html,
    body {
      height: 100%;
    }

    html {
      display: table;
      margin: auto;
    }

    body {
      display: table-cell;
      vertical-align: middle;
    }
  </style>
</head>

<body style="center">

  <div id="result" style="center"></div>
  <script>
    // var uid=sessionStorage.getItem("userid");
  

    var total = parseFloat(localStorage.getItem("price")).toFixed(2);
    var total = parseFloat(100).toFixed(2);
    // document.getElementById("result").innerHTML = "RM" + total;
    // console.log("total= RM" + total);
  </script>



  <div id="paypal-button"></div>
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <script>
    paypal.Button.render({
      // Configure environment
      env: 'sandbox',
      client: {
        sandbox: 'AZWa_tdfEELrR_jlV_aLxw7WHrdEPJwWYkUq1lFHBdFFRxRD8ZxoFd16J2VJ6tLfLVLbGe0q5FDZbqdP',
        production: 'demo_production_client_id'
      },
      // Customize button (optional)
      locale: 'en_US',
      style: {
        size: 'small',
        color: 'gold',
        shape: 'pill',
      },

      // Enable Pay Now checkout flow (optional)
      commit: true,

      // Set up a payment
      payment: function(data, actions) {
        return actions.payment.create({
          transactions: [{
            amount: {
              total: total,
              currency: 'MYR'
            }
          }]
        });
      },

      onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function() {
          // Show a confirmation message to the buyer

        //   updateHistory();
        sendEmail();
        // code here... update db participant, db list camp quantity.
         
          window.alert('Thank you for your purchase!');

        });
      }
    }, '#paypal-button');

   function sendEmail(){
    Email.send({
            Host: "smtp.gmail.com",
            Username: "ariffnaj@gmail.com",
            Password: "Password",
            To: 'ariffnaj2@gmail.com',
            From: "ariffnaj@gmail.com",
            Subject: "Mtour Purchase Receipt ",
            Body: " " +
              "<fieldset> <legend>--Purchase Reciept-- </legend></p>" +
              "<img src=" + id[k].image + " alt= Smiley face width=" + 100 % +" height=" + 50 % +"></img><br/>" +
              "<p><b>Place:</b>" + id[k].packageplace + "</p>" +
              "<p><b>Quantity: </b>" + id[k].quantity + "</p>" +
              "<p><b>Price: RM </b>" + id[k].price + "</p>" +
              "<p><b>UTC Time: </b>" + isoDate + "</p>" +
              "<p><b>Purchase ID: </b>" + id[k].packageplace + "</p> </fieldset>"
          }).then(
            message => alert(message));
   }

  
  </script>

</body>

</html>
