
<section class="listeplayers">
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
</section>

</body>
</html>



 