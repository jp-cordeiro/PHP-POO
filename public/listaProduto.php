<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    <?php foreach($lista as $produto){ ?>
        <tr>
            <td><?=$produto['id']?></td>
            <td><?=$produto['nome']?></td>
        </tr>
    <?php }; ?>
</table>