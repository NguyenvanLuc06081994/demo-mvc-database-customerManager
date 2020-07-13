<a href="index.php?page=add-customer">ADD Customer</a>
<table>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Address</td>
        <td>Email</td>
        <td>Phone</td>
        <td></td>
    </tr>
    <?php if (empty($customers)) : ?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else : ?>
    <?php foreach($customers as $key => $customer) : ?>

    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $customer->getFullName() ?></td>
        <td><?php echo $customer->getAddress() ?></td>
        <td><?php echo $customer->getEmail() ?></td>
        <td><?php echo $customer->getPhone() ?></td>
        <td>
            <a href="">Delete</a>
            <a href="">Update</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>
