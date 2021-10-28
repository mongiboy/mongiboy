<?
//Вывод ошибок PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

$curl = curl_init();
$zapros = '{
    "method":"get",
    "params":{
        "SelectionCriteria":{
            
        },
        "FieldNames":["Id","Name"]

    }
}';

$zapros1 = '{
    "method": "get",
    "params": {
        "SelectionCriteria": {
        "CampaignIds": [409180]
        },
        "FieldNames": ["Id", "Name", "Status", "Type"]
    }
}';

$zapros2 = '{
    "method": "get",
    "params": {
        "SelectionCriteria": {
        "AdGroupIds": [4047992]
    },
    "FieldNames": ["Id", "State", "Status", "Type"]
    }
}';

$zapros3 = '{
    "method": "get",
    "params": {
        "SelectionCriteria": {
        "Ids": [4047993]
    },
    "FieldNames": ["Id"],
    "TextAdFieldNames": ["Text", "Title", "Href", "VCardId"]
    }
}';

$zapros4 = '{
    "method": "get",
    "params": {
        "SelectionCriteria": {
        "AdGroupIds": [4047993]
    },
    "FieldNames": ["Id", "Keyword", "Bid", "State", "Status"]
    }
}';

//Change Bids
$who = 'campaigns';
$changeBids = '{
    "method": "update",
    "params": {
      "Campaigns": [{
        "Id": 409179,
        "TextCampaign": {
          "BiddingStrategy": {
            "Network": {
              "BiddingStrategyType": "MAXIMUM_COVERAGE"
            }
          }
        }
      }]
    }
  }';

//Добавление групп
$who = 'adgroups';
$adgroups = '{
    "method": "add",
    "params": {
      "AdGroups": [{
        "Name": "Scorpion",
        "CampaignId": 409179,
        "RegionIds": [213]
      }]
    }
  }';

//Добавление объявления
$who = 'ads';
$adads = '{
    "method": "add",
    "params": {
      "Ads": [{
        "AdGroupId": "4048047",
        "TextAd": {
          "Title": "Scorpion wins",
          "Text": "Fatality",
          "Mobile": "NO",
          "Href": "http://mongiboy.ru"
        }
      }]
    }
  }';

//Добавить ключ
$who = 'keywords';
$adkey = '{
    "method": "add",
    "params": {
      "Keywords": [{
        "Keyword": "mortal kombat",
        "AdGroupId": 4048047,
        "Bid": 400000
      }]
    }
  }';

//Изменение ставки
$who = 'keywordbids';
$chBid = '{
    "method": "set",
    "params": {
      "KeywordBids": [{
        "KeywordId": 9075620,
        "SearchBid": 700000
      }]
    }
  }';

  //Запрос ставки
$who = 'bids';
$getBid = '{
    "method": "get",
    "params": {
      "SelectionCriteria": {
        "AdGroupIds": [4048047]
      },
      "FieldNames": [
        "KeywordId",
        "Bid",
        "ContextBid"
      ]
    }
  }';


curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api-sandbox.direct.yandex.com/json/v5/".$who,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $getBid,
    CURLOPT_HTTPHEADER => array(
    "accept-language: ru",
    "authorization: Bearer AgAAAAAzZmkvAAbdLFdwFgwyHk4Jh2ZKkManDr8",
    "cache-control: no-cache"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

print_r(json_decode($response));
echo $err;
?>

