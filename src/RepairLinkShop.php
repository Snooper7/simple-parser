<?php

use DiDom\Document;

class RepairLinkShop
{
    // URL для авторизация
    private $url_auth = 'https://repairlinkshop.com/Account/Login';

    // URL для поиска машины по VIN
    // private $url_target = 'https://repairlinkshop.com/AutomotiveCatalog/Catalog';
    private $url_target = 'https://repairlinkshop.com/Vehicle/VehicleSelection';

    // private $url_get = 'https://repairlinkshop.com/Account/MyAccount';

    // URL для AJAX запроса для подгрузки атрибутов
    private $url_ajax = 'https://repairlinkshop.com/Vehicle/GetVinAttribute';


    private $auth_data = [
        'UserName' => 'rogakopita12',
        'Password' => '69tFTw4PiuFPr4s',
    ];

//    private $search_data = [
//        'VinNumber' => '5UXFA53562LP41183',
//    ];

    private $search_data = 'VinNumber=5UXFA53562LP41183&VinNumberList=%5B%7B%22Vin%22%3A%225UXFA53562LP41183%22%2C%22Year%22%3A2002%2C%22Make%22%3A%22BMW%22%2C%22Model%22%3A%22X5%22%7D%2C%7B%22Vin%22%3A%221FMYU01B72KC19127%22%2C%22Year%22%3A2002%2C%22Make%22%3A%22Ford%22%2C%22Model%22%3A%22Escape%22%7D%2C%7B%22Vin%22%3A%22YV1CM59H141123694%22%2C%22Year%22%3A2004%2C%22Make%22%3A%22Volvo%22%2C%22Model%22%3A%22XC90%22%7D%2C%7B%22Vin%22%3A%22KMHLS4AG3PU409389%22%2C%22Year%22%3A2023%2C%22Make%22%3A%22Hyundai%22%2C%22Model%22%3A%22Elantra%22%7D%2C%7B%22Vin%22%3A%222HGFC1F36MH705283%22%2C%22Year%22%3A2021%2C%22Make%22%3A%22Honda%22%2C%22Model%22%3A%22Civic%22%7D%2C%7B%22Vin%22%3A%221C6RR7LG6HS663868%22%2C%22Year%22%3A2017%2C%22Make%22%3A%22Ram%22%2C%22Model%22%3A%221500%22%7D%2C%7B%22Vin%22%3A%224A3AA46G82E122248%22%2C%22Year%22%3A2002%2C%22Make%22%3A%22Mitsubishi%22%2C%22Model%22%3A%22Galant%22%7D%2C%7B%22Vin%22%3A%22WD4FF0CD3KP140714%22%2C%22Year%22%3A2019%2C%22Make%22%3A%22Mercedes-Benz%22%2C%22Model%22%3A%22Sprinter%22%7D%2C%7B%22Vin%22%3A%22ZFBNFYD11KP780092%22%2C%22Year%22%3A2019%2C%22Make%22%3A%22Fiat%22%2C%22Model%22%3A%22500X%22%7D%2C%7B%22Vin%22%3A%22JM1GL1UMXM1613381%22%2C%22Year%22%3A2021%2C%22Make%22%3A%22Mazda%22%2C%22Model%22%3A%226%22%7D%2C%7B%22Vin%22%3A%221FA6P8TH1F5313596%22%2C%22Year%22%3A2015%2C%22Make%22%3A%22Ford%22%2C%22Model%22%3A%22Mustang%22%7D%2C%7B%22Vin%22%3A%221FBHE31G1THB53577%22%2C%22Year%22%3A1996%2C%22Make%22%3A%22Ford%22%2C%22Model%22%3A%22E-350+Econoline+Club+Wagon%22%7D%2C%7B%22Vin%22%3A%225FrYD4H48EB009087%22%2C%22Year%22%3A2014%2C%22Make%22%3A%22Acura%22%2C%22Model%22%3A%22MDX%22%7D%2C%7B%22Vin%22%3A%222FMPK4K98NBA15505%22%2C%22Year%22%3A2022%2C%22Make%22%3A%22Ford%22%2C%22Model%22%3A%22Edge%22%7D%2C%7B%22Vin%22%3A%22JM1GL1UM3L1514951%22%2C%22Year%22%3A2020%2C%22Make%22%3A%22Mazda%22%2C%22Model%22%3A%226%22%7D%2C%7B%22Vin%22%3A%221C4HJXFN9LW345489%22%2C%22Year%22%3A2020%2C%22Make%22%3A%22Jeep%22%2C%22Model%22%3A%22Wrangler%22%7D%2C%7B%22Vin%22%3A%223VV1B7AXXLM131510%22%2C%22Year%22%3A2020%2C%22Make%22%3A%22Volkswagen%22%2C%22Model%22%3A%22Tiguan%22%7D%2C%7B%22Vin%22%3A%221FTFW1RG8LFB01691%22%2C%22Year%22%3A2020%2C%22Make%22%3A%22Ford%22%2C%22Model%22%3A%22F-150%22%7D%2C%7B%22Vin%22%3A%222HNYD28808H543881%22%2C%22Year%22%3A2008%2C%22Make%22%3A%22Acura%22%2C%22Model%22%3A%22MDX%22%7D%2C%7B%22Vin%22%3A%22JM1GL1WY1K1509004%22%2C%22Year%22%3A2019%2C%22Make%22%3A%22Mazda%22%2C%22Model%22%3A%226%22%7D%5D&MakeSelection.MakeKey=0&MakeSelection.MakeName=&PartNumber=';

    private $ajax_data = '{"currentVehicle":{"CatalogOemId":21,"VinAttributes":[],"SelectedVehicleAttributes":[],"YearMakeModelAttributes":[],"FourthQuestionAttributes":null,"VinRecalls":[],"VehicleId":null,"Created":"/Date(-62135578800000)/","LastModified":"/Date(-62135578800000)/","MakeName":"BMW","Year":2002,"ModelName":"X5","VIN":"5UXFA53562LP41183","FourthQuestionAttribute":null}}';
    private $ch;


    private function init()
    {
        $ch = curl_init();
        //  Базовые настройки
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
            'Origin: https://repairlinkshop.com',
            'Referer: https://repairlinkshop.com/Account/Login',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 400);

        //  Настройки прокси
        curl_setopt($ch, CURLOPT_PROXY, PROXY);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, PROXY_PRD);

        //  Настройки для HTTPS
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        //  Настройки Cookies
        curl_setopt($ch, CURLOPT_COOKIEJAR, __DIR__ . '/cookie.txt');
        curl_setopt($ch, CURLOPT_COOKIEFILE, __DIR__ . '/cookie.txt');

        return $ch;
    }

    // Настройки для авторизации
    private function auth()
    {
        $ch = $this->init();

        curl_setopt($ch, CURLOPT_URL, $this->url_auth);
        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->auth_data));

        return curl_exec($ch);
    }

    // Настройки для поиска
    private function find()
    {
        $ch = $this->init();

        curl_setopt($ch, CURLOPT_URL, $this->url_target);
        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->search_data);

        return curl_exec($ch);
    }

    // Простой GET запрос без передачи параметров
    private function get()
    {
        $ch = $this->init();

        curl_setopt($ch, CURLOPT_URL, $this->url_get);
        curl_setopt($ch, CURLOPT_GET, TRUE);

        return curl_exec($ch);
    }

    private function ajax()
    {
        $ch = $this->init();

        curl_setopt($ch, CURLOPT_URL, $this->url_ajax);
        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->ajax_data);


        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'X-Requested-With: XMLHttpRequest',
        ]);

        return curl_exec($ch);
    }

    public function html()
    {
//        $response = $this->find();
        $response = $this->ajax();

        $document = new Document();
        $document->loadHtml($response);
//        $result = $document->loadHtml($response);
//        $data = $document->find('.form-control .email .valid');


        return $document->html();
    }

    public function getVinInfo($vin)
    {
    //  План следующий:
    //  Проверяем действительны ли еще куки для авторизации, если нет проводим заново авторизацию

    //  if (!$is_cookies_alive) {
    //      $this->auth();
    //  }
    //  Авторизация работает куки сохраняются

    //  Отправляем запрос с vin номером

    //  $this->find($vin);

    //  Вот здесь не могу разобраться как получить данные, на какой адрес правильно посылать запрос
    //  И как получить нужные для следующего запроса данные

    //  Получаем из него атрибут repairLink.catalog.setCurrentVehicle
    //  $ajax =
    //  $this->ajax_data = $ajax;

    //  Делаем AJAX запрос с этими данными

    //  $this->ajax();

    //  AJAX тоже работает и данные приходят

    //  И преобразуем как нужно данные по запчастям

    //  $data =

    //  return $data;
    }

}

$parser = new RepairLinkShop();

