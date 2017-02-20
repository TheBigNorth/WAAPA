<table border=1>
    <?php foreach ($data->members as $member) : ?>
        <tr>
            <td><?= $member->name; ?></td>
            <td><?= $member->position; ?></td>
        </tr>
    <?php endforeach; ?>
</table>