 <?php
    # Путь к файлу
    $file_name = "user.txt";

    # Считываем информацию по строкам
    $data = file( $file_name );
    ?>
    <style>
        td {text-align: center};
    </style>

    <table border="1">
        <thead>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Email</td>
        <td>Телефон</td>
        <td>С правилами согласен</td>
        </thead>
        <?php
        # В цикле обходим массив данных
        foreach( $data as $value ):

            # Разбиваем строку по |
            $value = explode( "\t", $value );
            ?>

            <tr>
                <td><?=$value[0]?></td>
                <td><?=$value[1]?></td>
                <td><?=$value[2]?></td>
                <td><?=$value[3]?></td>
                <td><?=$value[4]?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
 <a href="index.php"><strong>НАЗАД К РЕГИСТРАЦИИ</strong></a>