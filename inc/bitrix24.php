<?php

    // BITRIX24
    //Вызываем функцию для перехвата данных
    add_action( 'wpcf7_mail_sent', 'your_wpcf7_mail_sent_function' );
    function your_wpcf7_mail_sent_function( $contact_form ) {
        
        //подключение к серверу CRM
        define('CRM_HOST', 'fincom.bitrix24.ru'); // Ваш домен CRM системы
        define('CRM_PORT', '443'); // Порт сервера CRM. Установлен по умолчанию
        define('CRM_PATH', '/crm/configs/import/lead.php'); // Путь к компоненту lead.rest
        
        //авторизация в CRM
        define('CRM_LOGIN', 'a.crm@fc-g.com'); // Логин пользователя Вашей CRM по управлению лидами
        define('CRM_PASSWORD', '7qEbJnZri'); // Пароль пользователя Вашей CRM по управлению лидами
        
        //перехват данных из Contact Form 7
        $title = $contact_form->title;
        $posted_data = $contact_form->posted_data;
        if ('Контактная форма Rus' == $title ) { //Вместо "Контактная форма 1" необходимо указать название Вашей контактной формы
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();
            //далее мы перехватывает введенные данные в Contact Form 7
            $rusName = $posted_data['name-289']; //перехватываем поле [your-name]
            $rusPhone = $posted_data['phone-289'];
            $rusEmail = $posted_data['email-289'];
            $rusText = $posted_data['text-564'];
        
            //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
            $postData = array(
                'TITLE' => 'Лид со страницы ' . $rusText, // Установить значение свое значение
                'NAME' => $rusName,
                'PHONE_WORK' => $rusPhone,
                'EMAIL_HOME' => $rusEmail
            );
        
            //передача данных из Contact Form 7 в Bitrix24
            if (defined('CRM_AUTH')) {
                $postData['AUTH'] = CRM_AUTH;
            } else {
                $postData['LOGIN'] = CRM_LOGIN;
                $postData['PASSWORD'] = CRM_PASSWORD;
            }
        
            $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
            if ($fp) {
                $strPostData = '';
                foreach ($postData as $key => $value)
                    $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
        
                $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
                $str .= "Host: ".CRM_HOST."\r\n";
                $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $str .= "Content-Length: ".strlen($strPostData)."\r\n";
                $str .= "Connection: close\r\n\r\n";
        
                $str .= $strPostData;
        
                fwrite($fp, $str);
        
                $result = '';
                while (!feof($fp))
                {
                    $result .= fgets($fp, 128);
                }
                fclose($fp);
        
                $response = explode("\r\n\r\n", $result);
        
                $output = '<pre>'.print_r($response[1], 1).'</pre>';
            } else {
                echo 'Connection Failed! '.$errstr.' ('.$errno.')';
            }
        }
        //Начало второй формы
        elseif('Контактная форма Eng' == $title ) { //Вместо "Контактная форма 2" необходимо указать название Вашей контактной формы
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();
            
            //далее мы перехватывает введенные данные в Contact Form 7
            $engName = $posted_data['name-74']; //перехватываем поле [your-name]
            $engPhone = $posted_data['phone-74'];
            $engEmail = $posted_data['email-74'];
            $engText = $posted_data['text-564'];
            
            //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
            $postData = array(
                'TITLE' => 'Лид со страницы ' . $engText, // Установить значение свое значение
                'NAME' => $engName,
                'PHONE_WORK' => $engPhone,
                'EMAIL_HOME' => $engEmail
            );
                
            //передача данных из Contact Form 7 в Bitrix24
            if (defined('CRM_AUTH')) {
                $postData['AUTH'] = CRM_AUTH;
            } else {
                $postData['LOGIN'] = CRM_LOGIN;
                $postData['PASSWORD'] = CRM_PASSWORD;
            }
            
            $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
            if ($fp) {
                $strPostData = '';
                foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            
                $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
                $str .= "Host: ".CRM_HOST."\r\n";
                $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $str .= "Content-Length: ".strlen($strPostData)."\r\n";
                $str .= "Connection: close\r\n\r\n";
            
                $str .= $strPostData;
            
                fwrite($fp, $str);
            
                $result = '';
                while (!feof($fp))
                {
                    $result .= fgets($fp, 128);
                }
                fclose($fp);
            
                $response = explode("\r\n\r\n", $result);
            
                $output = print_r($response[1], 1);
            } else {
                echo 'Connection Failed! '.$errstr.' ('.$errno.')';
            }
        }
        //Форма: Промо страницы(в будущем основная)
        elseif('Контактная форма - Промо' == $title ) {
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();
            
            $ctfName = $posted_data['text-850'];
            $ctfPhone = $posted_data['tel-825'];
            $ctfEmail = $posted_data['email-130'];
            $textHide = $posted_data['text-564'];
            
            //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
            $postData = array(
                'TITLE' => 'Лид со страницы(Промо)' . $textHide, // Установить значение свое значение
                'NAME' => $ctfName,
                'PHONE_WORK' => $ctfPhone,
                'EMAIL_HOME' => $ctfEmail
            );
                
            //передача данных из Contact Form 7 в Bitrix24
            if (defined('CRM_AUTH')) {
                $postData['AUTH'] = CRM_AUTH;
            } else {
                $postData['LOGIN'] = CRM_LOGIN;
                $postData['PASSWORD'] = CRM_PASSWORD;
            }
            
            $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
            if ($fp) {
                $strPostData = '';
                foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            
                $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
                $str .= "Host: ".CRM_HOST."\r\n";
                $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $str .= "Content-Length: ".strlen($strPostData)."\r\n";
                $str .= "Connection: close\r\n\r\n";
            
                $str .= $strPostData;
            
                fwrite($fp, $str);
            
                $result = '';
                while (!feof($fp))
                {
                    $result .= fgets($fp, 128);
                }
                fclose($fp);
            
                $response = explode("\r\n\r\n", $result);
            
                $output = print_r($response[1], 1);
            } else {
                echo 'Connection Failed! '.$errstr.' ('.$errno.')';
            }
        }
        //Форма: Контактная форма RU
        elseif('Контактная форма(RU)v2' == $title ) {
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();
            
            $ctfName = $posted_data['text-861'];
            $ctfPhone = $posted_data['tel-831'];
            $ctfEmail = $posted_data['email-141'];
            $textHide = $posted_data['text-564'];
            
            //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
            $postData = array(
                'TITLE' => 'Лид со страницы' . $textHide, // Установить значение свое значение
                'NAME' => $ctfName,
                'PHONE_WORK' => $ctfPhone,
                'EMAIL_HOME' => $ctfEmail
            );
                
            //передача данных из Contact Form 7 в Bitrix24
            if (defined('CRM_AUTH')) {
                $postData['AUTH'] = CRM_AUTH;
            } else {
                $postData['LOGIN'] = CRM_LOGIN;
                $postData['PASSWORD'] = CRM_PASSWORD;
            }
            
            $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
            if ($fp) {
                $strPostData = '';
                foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            
                $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
                $str .= "Host: ".CRM_HOST."\r\n";
                $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $str .= "Content-Length: ".strlen($strPostData)."\r\n";
                $str .= "Connection: close\r\n\r\n";
            
                $str .= $strPostData;
            
                fwrite($fp, $str);
            
                $result = '';
                while (!feof($fp))
                {
                    $result .= fgets($fp, 128);
                }
                fclose($fp);
            
                $response = explode("\r\n\r\n", $result);
            
                $output = print_r($response[1], 1);
            } else {
                echo 'Connection Failed! '.$errstr.' ('.$errno.')';
            }
        }
        //Форма: Контактная форма EN
        elseif('Контактная форма(EN)v2' == $title ) {
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();
            
            $ctfName = $posted_data['text-852'];
            $ctfPhone = $posted_data['tel-822'];
            $ctfEmail = $posted_data['email-132'];
            $textHide = $posted_data['text-564'];
            
            //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
            $postData = array(
                'TITLE' => 'Лид со страницы' . $textHide, // Установить значение свое значение
                'NAME' => $ctfName,
                'PHONE_WORK' => $ctfPhone,
                'EMAIL_HOME' => $ctfEmail
            );
                
            //передача данных из Contact Form 7 в Bitrix24
            if (defined('CRM_AUTH')) {
                $postData['AUTH'] = CRM_AUTH;
            } else {
                $postData['LOGIN'] = CRM_LOGIN;
                $postData['PASSWORD'] = CRM_PASSWORD;
            }
            
            $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
            if ($fp) {
                $strPostData = '';
                foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            
                $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
                $str .= "Host: ".CRM_HOST."\r\n";
                $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $str .= "Content-Length: ".strlen($strPostData)."\r\n";
                $str .= "Connection: close\r\n\r\n";
            
                $str .= $strPostData;
            
                fwrite($fp, $str);
            
                $result = '';
                while (!feof($fp))
                {
                    $result .= fgets($fp, 128);
                }
                fclose($fp);
            
                $response = explode("\r\n\r\n", $result);
            
                $output = print_r($response[1], 1);
            } else {
                echo 'Connection Failed! '.$errstr.' ('.$errno.')';
            }
        }
        //Форма: Контактная форма услуг(RU)
        elseif('Контактная форма услуг(RU)' == $title ) {
            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();
            
            $ctfName = $posted_data['text-854'];
            $ctfPhone = $posted_data['tel-824'];
            $textHide = $posted_data['text-564'];
            
            //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
            $postData = array(
                'TITLE' => 'Лид со страницы' . $textHide, // Установить значение свое значение
                'NAME' => $ctfName,
                'PHONE_WORK' => $ctfPhone
            );
                
            //передача данных из Contact Form 7 в Bitrix24
            if (defined('CRM_AUTH')) {
                $postData['AUTH'] = CRM_AUTH;
            } else {
                $postData['LOGIN'] = CRM_LOGIN;
                $postData['PASSWORD'] = CRM_PASSWORD;
            }
            
            $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
            if ($fp) {
                $strPostData = '';
                foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            
                $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
                $str .= "Host: ".CRM_HOST."\r\n";
                $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $str .= "Content-Length: ".strlen($strPostData)."\r\n";
                $str .= "Connection: close\r\n\r\n";
            
                $str .= $strPostData;
            
                fwrite($fp, $str);
            
                $result = '';
                while (!feof($fp))
                {
                    $result .= fgets($fp, 128);
                }
                fclose($fp);
            
                $response = explode("\r\n\r\n", $result);
            
                $output = print_r($response[1], 1);
            } else {
                echo 'Connection Failed! '.$errstr.' ('.$errno.')';
            }
        }
	}