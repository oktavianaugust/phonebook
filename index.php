<?php

include "insert.php";

?>
<html>
<head>
     <title> Справочник</title>
</head>
<body>
        <button>Список контактов</button>
        <button>Редактировать</button>
        <button>Добавить новый контакт</button>
    </div>


<form name="myform" action="insert.php" method="POST">
    <div>
        Введите Имя: <input type='text' name='name'"/>
    </div>
    <div>
        Введите Фамилию: <input type='text' name='surname'"/>
    </div>
    <div>
        Введите Отчество: <input type='text' name='family_name'"/>
    </div>
    <div>
        Введите дату рождения: <input type='date' name='birth'"/>
    </div>
    <div>
        <input type='submit' name='myform' value='ADD!'/>
    </div>
</form>
</body>
</html>