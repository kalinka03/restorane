<?php 
if (!empty($_POST['name']) AND !empty($_POST['email'])  AND !empty($_POST['phone'])AND !empty($_POST['message'])){
  
  $headers = 'From: Потапова Катя\r\n'.
             'Reply-To: kalinka03333@gmail.com\r\n'.
              'X-Mailer: PHP/'. phpversion();
             
  $theme = 'Новое сообщение';

  $letter = 'Данные сообщения:\r\n';
  $letter .='Имя: '.$_POST['name'].'\r\n';
  $letter .='Email: '.$_POST['email'].'\r\n';
  $letter .='Телефон: '.$_POST['phone'].'\r\n';
  $letter .='Сообщение: '.$_POST['message'].'\r\n';
  
  if (mail('kalinka03333@gmail.com', $theme, $letter, $headers)){
    echo "<h2>Заявка отправлена</h2>";
    header('Location: index.html');
  } else {
    echo "Ошибка при отправке!";
  }
} else {
  echo "Ошибка: Заполните все поля!";
}