

<form action="" method="post">
    <input type="number" name="id" value="<?php echo $customer['customer_number'] ?>">
    <input type="text" name="fullname" placeholder="fullname" value="<?php echo $customer['fullname'] ?>">
    <input type="text" name="address" placeholder="address" value="<?php echo $customer['address'] ?>">
    <input type="email" name="email" placeholder="email" value="<?php echo $customer['email'] ?>">
    <input type="number" name="phone" placeholder="phone" value="<?php echo $customer['phone'] ?>">
    <input type="submit" value="Update">
</form>