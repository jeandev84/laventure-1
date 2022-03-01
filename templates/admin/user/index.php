<h1>Пользователи</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Username</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">Code</th>
    </tr>
    </thead>
    <tbody>
    <?php if (! empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <th scope="row"><?= $user->getId()?></th>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getUsername() ?></td>
                <td><?= $user->getAddress() ?></td>
                <td><?= $user->getCity() ?></td>
                <td><?= $user->getCode() ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>