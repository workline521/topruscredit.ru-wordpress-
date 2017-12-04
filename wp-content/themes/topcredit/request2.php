    <?php
    $recepient = "corsair552@yandex.ru";
    $sitename = "topruscredit";

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $text = trim($_POST["email"]);

    // если есть файл, то прикрепляем его к письму

    if(isset($_FILES['upl'])) {
      if($_FILES['upl']['error'] == 0){
        $message->AddAttachment($_FILES['upl']['tmp_name'], $_FILES['upl']['name']);
      }
    }

    $message = "Имя: $name\nТелефон: $phone\ne-маил: $mail \n$text";


    $pagetitle = "Заявка на подписку с сайта \"$sitename\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

