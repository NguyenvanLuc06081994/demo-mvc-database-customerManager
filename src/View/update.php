

<form action="" method="post">
    <input type="number" name="id" value="<?php $customer->getCustomerNumber() ?>" hidden>
    <input type="text" name="fullname" placeholder="fullname" value="<?php $customer->getFullName() ?>">
    <input type="text" name="address" placeholder="address" value="<?php $customer->getAddress() ?>">
    <input type="email" name="email" placeholder="email" value="<?php $customer->getEmail() ?>">
    <input type="number" name="phone" placeholder="phone" value="<?php $customer->getPhone() ?>">
    <input type="submit" value="Update">
</form>