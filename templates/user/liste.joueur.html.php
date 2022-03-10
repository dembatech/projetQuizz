
<section class="listeplayers">
    <?php if(count($data)==0):?>
        <h1 style="color:red; font-size:3em;">Pas de joueur </h1>
    <?php else: ?>
        <table>
            <tr>
                <th>Home</th>
                <th>Prenom</th>
                <th>Score</th>
            </tr>
            <?php foreach ($data as $value) :?>
            <tr>
                <td><?=$value['nom']?></td>
                <td><?=$value['prenom']?></td>
                <td><?=$value['login']?></td>
            </tr>
            <?php endforeach ?> 
        </table>
    <?php endif ?>
</section>
</body>
</html>



 