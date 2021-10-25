<html>
<head>
</head>
<body>

<?php
$total = 100;
echo 'Total '.$total;
?>

<form name="checkoutForm" method="POST" action="checkout.php">
    <script type="text/javascript" src="https://cdn.omise.co/omise.js"
        data-key="pkey_test_5pj8zasgcvaasrujrrs"
        data-image="http://bit.ly/customer_image"
        data-frame-label="Eaterio"
        data-button-label="Pay now"
        data-submit-label="Submit"
        data-location="no"
        data-amount="<?php echo $total;?>00"
        data-currency="thb"
        >
    </script>
    <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
    <input type="hidden" name="total" value="<?php echo $total;?>">
</form>

<!-- data-key="YOUR_PUBLIC_KEY" -->
</body>
</html>