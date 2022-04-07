<?php

    add_action('wpcf7_mail_sent', 'wpcf7_mail_sent_function');
    
    function wpcf7_mail_sent_function($contact_form) {

        $title = $contact_form->title;
        $posted_data = $contact_form->posted_data;

        if ('Контактная форма Rus' == $title ) {

            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();

            // Перехватывает введенные данные в Contact Form 7
            $name = $posted_data['text-289'];
            $email = $posted_data['email-289'];
            $phone = $posted_data['tel-289'];
            $title = $posted_data['text-564'];
        
            $queryUrl = 'https://fincom.bitrix24.ru/rest/114/keviule2jvconggu/crm.lead.add.json';

            $queryData = http_build_query(array(
                'fields' => array(
                    'TITLE' => 'Лид со страницы ' . $title,
                    'NAME' => $name,
                    'PHONE' => Array(
                        "n0" => Array(
                            "VALUE" => $phone,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    'EMAIL' => Array(
                        "n0" => Array(
                            "VALUE" => $email,
                            "VALUE_TYPE" => "WORK"
                        )
                    )
                ),
                'params' => array("REGISTER_SONET_EVENT" => "Y")
            ));
            
            // обращаемся к Битрикс24 при помощи функции curl_exec
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $queryUrl,
                CURLOPT_POSTFIELDS => $queryData,
            ));

            $result = curl_exec($curl);
            curl_close($curl);
            $result = json_decode($result, 1);
            if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: ".$result['error_description']."<br/>";
        }

    };