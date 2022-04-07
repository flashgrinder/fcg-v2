<?php

    add_action('wpcf7_mail_sent', 'wpcf7_mail_sent_function');
    
    function wpcf7_mail_sent_function($contact_form) {

        $title = $contact_form->title;
        $posted_data = $contact_form->posted_data;

        if ('Контактная форма Rus' == $title ) {

            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();

            // Перехватывает введенные данные в Contact Form 7
            $name_289 = $posted_data['name-289'];
            $email_289 = $posted_data['email-289'];
            $phone_289 = $posted_data['phone-289'];
            $title = $posted_data['text-564'];
        
            $queryUrl = 'https://fincom.bitrix24.ru/rest/114/keviule2jvconggu/crm.lead.add.json';

            $queryData = http_build_query(array(
                'fields' => array(
                    'TITLE' => 'Лид со страницы ' . $title,
                    'NAME' => $name_289,
                    'PHONE' => Array(
                        "n0" => Array(
                            "VALUE" => $phone_289,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    'EMAIL' => Array(
                        "n0" => Array(
                            "VALUE" => $email_289,
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

        elseif ('Контактная форма Eng' == $title ) {

            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();

            // Перехватывает введенные данные в Contact Form 7
            $name_74 = $posted_data['name-74'];
            $email_74 = $posted_data['email-74'];
            $phone_74 = $posted_data['phone-74'];
            $title = $posted_data['text-564'];
        
            $queryUrl = 'https://fincom.bitrix24.ru/rest/114/keviule2jvconggu/crm.lead.add.json';

            $queryData = http_build_query(array(
                'fields' => array(
                    'TITLE' => 'Лид со страницы ' . $title,
                    'NAME' => $name_74,
                    'PHONE' => Array(
                        "n0" => Array(
                            "VALUE" => $phone_74,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    'EMAIL' => Array(
                        "n0" => Array(
                            "VALUE" => $email_74,
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

        elseif ('Контактная форма(RU)v2' == $title ) {

            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();

            // Перехватывает введенные данные в Contact Form 7
            $name_861 = $posted_data['text-861'];
            $email_141 = $posted_data['email-141'];
            $phone_831 = $posted_data['tel-831'];
            $title = $posted_data['text-564'];
        
            $queryUrl = 'https://fincom.bitrix24.ru/rest/114/keviule2jvconggu/crm.lead.add.json';

            $queryData = http_build_query(array(
                'fields' => array(
                    'TITLE' => 'Лид со страницы ' . $title,
                    'NAME' => $name_861,
                    'PHONE' => Array(
                        "n0" => Array(
                            "VALUE" => $phone_831,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    'EMAIL' => Array(
                        "n0" => Array(
                            "VALUE" => $email_141,
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

        elseif ('Контактная форма(EN)v2' == $title ) {

            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();

            // Перехватывает введенные данные в Contact Form 7
            $name_852 = $posted_data['text-852'];
            $email_132 = $posted_data['email-132'];
            $phone_822 = $posted_data['tel-822'];
            $title = $posted_data['text-564'];
        
            $queryUrl = 'https://fincom.bitrix24.ru/rest/114/keviule2jvconggu/crm.lead.add.json';

            $queryData = http_build_query(array(
                'fields' => array(
                    'TITLE' => 'Лид со страницы ' . $title,
                    'NAME' => $name_852,
                    'PHONE' => Array(
                        "n0" => Array(
                            "VALUE" => $phone_822,
                            "VALUE_TYPE" => "WORK"
                        )
                    ),
                    'EMAIL' => Array(
                        "n0" => Array(
                            "VALUE" => $email_132,
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

        elseif ('Контактная форма услуг(RU)' == $title ) {

            $submission = WPCF7_Submission::get_instance();
            $posted_data = $submission->get_posted_data();

            // Перехватывает введенные данные в Contact Form 7
            $name_854 = $posted_data['text-854'];
            $phone_824 = $posted_data['tel-824'];
            $title = $posted_data['text-564'];
        
            $queryUrl = 'https://fincom.bitrix24.ru/rest/114/keviule2jvconggu/crm.lead.add.json';

            $queryData = http_build_query(array(
                'fields' => array(
                    'TITLE' => 'Лид со страницы ' . $title,
                    'NAME' => $name_854,
                    'PHONE' => Array(
                        "n0" => Array(
                            "VALUE" => $phone_824,
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