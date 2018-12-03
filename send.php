<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'dogon86@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Отправлено с сайта-профиля'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Your name: '.$_POST['name'].'</p>
                        <p>Your email: '.$_POST['email'].'</p>
                        <p>Subject: '.$_POST['subject'].'</p>
                        <p>Your message: '.$_POST['message'].'</p>                                                
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <dogon@dogon.zzz.com.ua>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>