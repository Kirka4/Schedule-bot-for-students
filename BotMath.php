<?php
require_once('simplevk-master/autoload.php');
use DigitalStar\vk_api\VK_api as vk_api; // Основной класс

const VK_KEY = "vk1.a.r8sY11iqrBsftYFSXCU566SEWb9az955mAr4WjqS5iWgaw5-0uFRykKJZD4ZhPzp_bcCVmMZ1XuajPuIf2HCop7Y1G7PAeuaDKRvMpu8wPvejGIAj49YbW70iEpwTa6Gm1OfalDwtzKpqKGhqxxLsp70EsQbCNQhviPl6lYl5WYMG7sXPpR9Af2_5kUajvY45np0e3P065iTVnpu-vl1og";
const ACCESS_KEY = "e4370624";
const VERSION = "5.131";

$vk = vk_api::create(VK_KEY, VERSION)->setConfirm(ACCESS_KEY);

$vk->initVars($peer_id, $message, $payload, $vk_id, $type, $data); // Инициализация переменных

//Задаем кнопки
//Кнопки выбора курса
//1 курс
$btn_k1 = $vk->buttonText('1 курс', 'blue', ['command' => 'btn_k1']);
//2 курс
$btn_k2 = $vk->buttonText('2 курс', 'blue', ['command' => 'btn_k2']);
//3 курс
$btn_k3 = $vk->buttonText('3 курс', 'blue', ['command' => 'btn_k3']);
//4 курс
$btn_k4 = $vk->buttonText('4 курс', 'blue', ['command' => 'btn_k4']);
//5 курс
$btn_k5 = $vk->buttonText('5 курс', 'blue', ['command' => 'btn_k5']);
//6 курс
$btn_k6 = $vk->buttonText('6 курс', 'blue', ['command' => 'btn_k6']);
//Магистры 1 курс
$btn_magk1 = $vk->buttonText('😎Магистры 1 курс', 'green', ['command' => 'btn_magk1']);
//Магистры 2 курс
$btn_magk2 = $vk->buttonText('😎Магистры 2 курс', 'green', ['command' => 'btn_magk2']);

//Кнопки выбора направления//специальности
//1 курс
//Математика
$btn_mk1 = $vk->buttonText('Математика', 'blue', ['command' => 'btn_mk1']);
//Прикладная математика
$btn_pmk1 = $vk->buttonText('Прикладная математика', 'blue', ['command' => 'btn_pmk1']);
//Математика и компьютерные науки
$btn_mandknk1 = $vk->buttonText('Математика и компьютерные науки', 'blue', ['command' => 'btn_mandknk1']);
//Фундаментальные математика и механика
$btn_fmandmk1 = $vk->buttonText('Фундаментальные математика и механика', 'blue', ['command' => 'btn_fmandmk1']);
//Информационно-аналитические системы безопасности
$btn_iasbk1 = $vk->buttonText('Инф.-аналитические системы безопасности', 'blue', ['command' => 'btn_iasbk1']);

//2 курс
//Математика
$btn_mk2 = $vk->buttonText('Математика', 'blue', ['command' => 'btn_mk2']);
//Прикладная математика
$btn_pmk2 = $vk->buttonText('Прикладная математика', 'blue', ['command' => 'btn_pmk2']);
//Математика и компьютерные науки
$btn_mandknk2 = $vk->buttonText('Математика и компьютерные науки', 'blue', ['command' => 'btn_mandknk2']);
//Фундаментальные математика и механика
$btn_fmandmk2 = $vk->buttonText('Фундаментальные математика и механика', 'blue', ['command' => 'btn_fmandmk2']);
//Информационные системы безопасности
$btn_isbk2 = $vk->buttonText('Информационные системы безопасности', 'blue', ['command' => 'btn_isbk2']);

//3 курс
//Математика
$btn_mk3 = $vk->buttonText('Математика', 'blue', ['command' => 'btn_mk3']);
//Прикладная математика
$btn_pmk3 = $vk->buttonText('Прикладная математика', 'blue', ['command' => 'btn_pmk3']);
//Математика и компьютерные науки
$btn_mandknk3 = $vk->buttonText('Математика и компьютерные науки', 'blue', ['command' => 'btn_mandknk3']);
//Фундаментальные математика и механика
$btn_fmandmk3 = $vk->buttonText('Фундаментальные математика и механика', 'blue', ['command' => 'btn_fmandmk3']);
//Информационные системы безопасности
$btn_isbk3 = $vk->buttonText('Информационные системы безопасности', 'blue', ['command' => 'btn_isbk3']);

//4 курс
//Математика
$btn_mk4 = $vk->buttonText('Математика', 'blue', ['command' => 'btn_mk4']);
//Прикладная математика
$btn_pmk4 = $vk->buttonText('Прикладная математика', 'blue', ['command' => 'btn_pmk4']);
//Математика и компьютерные науки
$btn_mandknk4 = $vk->buttonText('Математика и компьютерные науки', 'blue', ['command' => 'btn_mandknk4']);
//Фундаментальные математика и механика
$btn_fmandmk4 = $vk->buttonText('Фундаментальные математика и механика', 'blue', ['command' => 'btn_fmandmk4']);
//Информационные системы безопасности
$btn_isbk4 = $vk->buttonText('Информационные системы безопасности', 'blue', ['command' => 'btn_isbk4']);

//5 курс
//Фундаментальные математика и механика
$btn_fmandmk5 = $vk->buttonText('Фундаментальные математика и механика', 'blue', ['command' => 'btn_fmandmk5']);

//6 курс
//Информационные системы безопасности
$btn_isbk6 = $vk->buttonText('Информационные системы безопасности', 'blue', ['command' => 'btn_isbk6']);

//Магистры 1 курс
//Математика
$btn_mmagk1 = $vk->buttonText('Математика', 'blue', ['command' => 'btn_mmagk1']);
//Прикладная математика
$btn_pmmagk1 = $vk->buttonText('Прикладная математика', 'blue', ['command' => 'btn_pmmagk1']);
//Математика и компьютерные науки
$btn_mandknmagk1 = $vk->buttonText('Математика и компьютерные науки', 'blue', ['command' => 'btn_mandknmagk1']);

//Магистры 2 курс
//Математика
$btn_mmagk2 = $vk->buttonText('Математика', 'blue', ['command' => 'btn_mmagk2']);
//Математика и компьютерные науки
$btn_mandknmagk2 = $vk->buttonText('Математика и компьютерные науки', 'blue', ['command' => 'btn_mandknmagk2']);

//Кнопка назад
$btn_backn = $vk->buttonText('Назад', 'red', ['command' => 'btn_backn']);

//Кнопки выбора групп/подгрупп
//1 курс
//Математика
//Подгруппа 1.1
$btn_pgrp11k1 = $vk->buttonText('Подгруппа 1.1', 'green', ['command' => 'btn_pgrp11k1']);
//Подгруппа 1.2
$btn_pgrp12k1 = $vk->buttonText('Подгруппа 1.2', 'green', ['command' => 'btn_pgrp12k1']);

//Кнопка назад
$btn_backrmk1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backrmk1']);

//Прикладная математика
//Подгруппа 2.1
$btn_pgrp21k1 = $vk->buttonText('Подгруппа 2.1', 'green', ['command' => 'btn_pgrp21k1']);
//Подгруппа 2.2
$btn_pgrp22k1 = $vk->buttonText('Подгруппа 2.2', 'green', ['command' => 'btn_pgrp22k1']);

//Кнопка назад
$btn_backrpmk1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backrpmk1']);

//Математика и компьютерные науки
//Подгруппа 3.1
$btn_pgrp31k1 = $vk->buttonText('Подгруппа 3.1', 'green', ['command' => 'btn_pgrp31k1']);
//Подгруппа 3.2
$btn_pgrp32k1 = $vk->buttonText('Подгруппа 3.2', 'green', ['command' => 'btn_pgrp32k1']);
//Подгруппа 3.3
$btn_pgrp33k1 = $vk->buttonText('Подгруппа 3.3', 'green', ['command' => 'btn_pgrp33k1']);
//Подгруппа 3.4
$btn_pgrp34k1 = $vk->buttonText('Подгруппа 3.4', 'green', ['command' => 'btn_pgrp34k1']);

//Кнопка назад
$btn_backrmknk1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backrmknk1']);

//Фундаментальные математика и механика
//Группа 4
$btn_grp4k1 = $vk->buttonText('Группа 4', 'green', ['command' => 'btn_pgrp4k1']);

//Кнопка назад
$btn_backrfmk1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backrfmk1']);

//Информационно-аналитические системы безопасности
//Группа 5
$btn_grp5k1 = $vk->buttonText('Группа 5', 'green', ['command' => 'btn_pgrp5k1']);   

//Кнопка назад
$btn_backrisbk1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backrisbk1']);

//Кнопка назад
$btn_backgk1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgk1']);

//2 курс
//Математика
//Подгруппа 1.1
$btn_pgrp11k2 = $vk->buttonText('Подгруппа 1.1', 'green', ['command' => 'btn_pgrp11k2']);
//Подгруппа 1.2
$btn_pgrp12k2 = $vk->buttonText('Подгруппа 1.2', 'green', ['command' => 'btn_pgrp12k2']);

//Прикладная математика
//Подгруппа 2.1
$btn_pgrp21k2 = $vk->buttonText('Подгруппа 2.1', 'green', ['command' => 'btn_pgrp21k2']);
//Подгруппа 2.2
$btn_pgrp22k2 = $vk->buttonText('Подгруппа 2.2', 'green', ['command' => 'btn_pgrp22k2']);

//Математика и компьютерные науки
//Подгруппа 3.1
$btn_pgrp31k2 = $vk->buttonText('Подгруппа 3.1', 'green', ['command' => 'btn_pgrp31k2']);
//Подгруппа 3.2
$btn_pgrp32k2 = $vk->buttonText('Подгруппа 3.2', 'green', ['command' => 'btn_pgrp32k2']);
//Подгруппа 3.3
$btn_pgrp33k2 = $vk->buttonText('Подгруппа 3.3', 'green', ['command' => 'btn_pgrp33k2']);
//Подгруппа 3.4
$btn_pgrp34k2 = $vk->buttonText('Подгруппа 3.4', 'green', ['command' => 'btn_pgrp34k2']);

//Фундаментальные математика и механика
//Группа 4
$btn_grp4k2 = $vk->buttonText('Группа 4', 'green', ['command' => 'btn_pgrp4k2']);

//Информационные системы безопасности
//Подгруппа 5.1
$btn_pgrp51k2 = $vk->buttonText('Подгруппа 5.1', 'green', ['command' => 'btn_pgrp51k2']);
//Подгруппа 5.2
$btn_pgrp52k2 = $vk->buttonText('Подгруппа 5.2', 'green', ['command' => 'btn_pgrp52k2']);   

//Кнопка назад
$btn_backgk2 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgk2']);

//3 курс
//Математика
//КУЧП
$btn_KUCHPk3 = $vk->buttonText('КУЧП', 'green', ['command' => 'btn_KUCHPk3']);

//Прикладная математика
//КММ
$btn_KMMk3 = $vk->buttonText('КММ', 'green', ['command' => 'btn_KMMk3']);

//Математика и компьютерные науки
//КМА
$btn_KMAk3 = $vk->buttonText('КМА', 'green', ['command' => 'btn_KMAk3']);
//КФА
$btn_KFAk3 = $vk->buttonText('КФА', 'green', ['command' => 'btn_KFAk3']);

//Фундаментальные математика и механика
//КТФ
$btn_KTFk3 = $vk->buttonText('КТФ', 'green', ['command' => 'btn_KTFk3']);

//Информационные системы безопасности
//КММ

//Кнопка назад
$btn_backgk3 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgk3']);

//4 курс
//Математика
//КУЧП
$btn_KUCHPk4 = $vk->buttonText('КУЧП', 'green', ['command' => 'btn_KUCHPk4']);

//Прикладная математика
//КММ
$btn_KMMk4 = $vk->buttonText('КММ', 'green', ['command' => 'btn_KMMk4']);

//Математика и компьютерные науки
//КМА
$btn_KMAk4 = $vk->buttonText('КМА', 'green', ['command' => 'btn_KMAk4']);
//КФА
$btn_KFAk4 = $vk->buttonText('КФА', 'green', ['command' => 'btn_KFAk4']);

//Фундаментальные математика и механика
//КТФ
$btn_KTFk4 = $vk->buttonText('КТФ', 'green', ['command' => 'btn_KTFk4']);

//Информационные системы безопасности
//КММ ИАСБ
$btn_KMMIASBk4 = $vk->buttonText('КММ ИАСБ', 'green', ['command' => 'btn_KMMIASBk4']);

//Кнопка назад
$btn_backgk4 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgk4']);

//5 курс
//Фундаментальные математика и механика
//КТФ
$btn_KTFk5 = $vk->buttonText('КТФ', 'green', ['command' => 'btn_KTFk5']);

//Кнопка назад
$btn_backgk5 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgk5']);

//6 курс
//Информационные системы безопасности
//КММ 
$btn_KMMk6 = $vk->buttonText('КММ', 'green', ['command' => 'btn_KMMk4']);

//Кнопка назад
$btn_backgk6 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgk6']);

//Магистры 1 курс
//Математика
//КАиММГ
$btn_KAiMMGmagk1 = $vk->buttonText('КАиММГ', 'green', ['command' => 'btn_KAiMMGmagk1']);

//Прикладная математика
//КММ
$btn_KMMmagk1 = $vk->buttonText('КММ', 'green', ['command' => 'btn_KMMmagk1']);

//Математика и компьютерные науки
//КМА
$btn_KMAmagk1 = $vk->buttonText('КМА', 'green', ['command' => 'btn_KMAmagk1']);
//КФА
$btn_KFAmagk1 = $vk->buttonText('КФА', 'green', ['command' => 'btn_KFAmagk1']);

//Кнопка назад
$btn_backgmagk1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgmagk1']);

//Магистры 2 курс
//Математика
//КАиММГ
$btn_KAiMMGmagk2 = $vk->buttonText('КАиММГ', 'green', ['command' => 'btn_KAiMMGmagk2']);

//Математика и компьютерные науки
//КММ
$btn_KMMmagk2 = $vk->buttonText('КММ', 'green', ['command' => 'btn_KMMmagk2']);
//КМА
$btn_KMAmagk2 = $vk->buttonText('КМА', 'green', ['command' => 'btn_KMAmagk2']);
//КФА
$btn_KFAmagk2 = $vk->buttonText('КФА', 'green', ['command' => 'btn_KFAmagk2']);

//Кнопка назад
$btn_backgmagk2 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backgmagk2']);

//Кнопки выбора пар
$btn_tod = $vk->buttonText('Пары на сегодня', 'green', ['command' => 'btn_1ntod']);
$btn_tom = $vk->buttonText('Пары на завтра', 'green', ['command' => 'btn_1ntom']);
$btn_full = $vk->buttonText('Пары на все дни ', 'blue', ['command' => 'btn_1nfull']); 
$vkid = $data->object->from_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя

$message = mb_strtolower($message);

if ($message == 'yfxfnm')
{
  $message = 'начать';
}

//Функции
//Функция начала
function NumeratorDenumerator($vk, $peer_id, $btn_k1, $btn_k2,$btn_k3,$btn_k4,$btn_k5, $btn_k6,$btn_magk1, $btn_magk2)
{
    $vk->sendButton($peer_id, "На каком вы курсе❓", [[$btn_k1, $btn_k2,$btn_k3],[$btn_k4,$btn_k5,$btn_k6],[$btn_magk1, $btn_magk2]]);
}

//Начало кода
if ($data->type == 'message_new')
 {
    if ($message == 'начать' )
   {
    NumeratorDenumerator($vk, $peer_id, $btn_k1, $btn_k2,$btn_k3,$btn_k4,$btn_k5, $btn_k6,$btn_magk1, $btn_magk2);
   }}

if (isset($data->object->payload)) {  //получаем payload
    $payload = json_decode($data->object->payload, True);
} else {
    $payload = null;
}
$payload = $payload['command'];

 
  //Действия кнопок
  //Кнопки назад
  if ($payload == 'btn_backn')//Кнопка назад в выборе направления
  $vk->sendButton($peer_id, "На каком вы курсе❓", [[$btn_k1, $btn_k2,$btn_k3],[$btn_k4,$btn_k5,$btn_k6],[$btn_magk1, $btn_magk2]]);
  
  //1 курс
  if ($payload == 'btn_backgk1')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk1, $btn_pmk1], [$btn_mandknk1], [$btn_fmandmk1], [$btn_iasbk1],[$btn_backn]]);

  //2 курс
  if ($payload == 'btn_backgk2')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk2, $btn_pmk2], [$btn_mandknk2], [$btn_fmandmk2], [$btn_isbk2],[$btn_backn]]);

  //3 курс
  if ($payload == 'btn_backgk3')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk3, $btn_pmk3], [$btn_mandknk3], [$btn_fmandmk3], [$btn_isbk3],[$btn_backn]]);

  //4 курс
  if ($payload == 'btn_backgk4')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk4, $btn_pmk4], [$btn_mandknk4], [$btn_fmandmk4], [$btn_isbk4],[$btn_backn]]);

  //5 курс
  if ($payload == 'btn_backgk5')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [ [$btn_fmandmk5],[$btn_backn]]);

  //6 курс
  if ($payload == 'btn_backgk6')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [ [$btn_isbk6],[$btn_backn]]);

  //Магистры 1 курс
  if ($payload == 'btn_backgmagk1')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mmagk1, $btn_pmmagk1], [$btn_mandknmagk1], [$btn_backn]]);

  //Магистры 2 курс
  if ($payload == 'btn_backgmagk2')//Кнопка назад в выборе групп
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mmagk2], [$btn_mandknmagk2], [$btn_backn]]);
  
  //Остальные кнопки
  //1 курс
  if ($payload == 'btn_k1')//Кнопка выбора первого курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk1, $btn_pmk1], [$btn_mandknk1], [$btn_fmandmk1], [$btn_iasbk1],[$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_mk1')//Кнопка выбора математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_pgrp11k1, $btn_pgrp12k1], [$btn_backgk1]]);

  if ($payload == 'btn_pmk1')//Кнопка выбора прикладной математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_pgrp21k1, $btn_pgrp22k1], [$btn_backgk1]]);

  if ($payload == 'btn_mandknk1')//Кнопка выбора математики и комп наук
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_pgrp31k1,$btn_pgrp32k1], [$btn_pgrp33k1, $btn_pgrp34k1], [$btn_backgk1]]);

  if ($payload == 'btn_fmandmk1')//Кнопка выбора фундаментальной математики и механики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_grp4k1],  [$btn_backgk1]]);

  if ($payload == 'btn_iasbk1')//Кнопка выбора инф.-аналитических СБ
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_grp5k1],  [$btn_backgk1]]);

  //2 курс
  if ($payload == 'btn_k2')//Кнопка выбора второго курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk2, $btn_pmk2], [$btn_mandknk2], [$btn_fmandmk2], [$btn_isbk2],[$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_mk2')//Кнопка выбора математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_pgrp11k2, $btn_pgrp12k2], [$btn_backgk2]]);

  if ($payload == 'btn_pmk2')//Кнопка выбора прикладной математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_pgrp21k2, $btn_pgrp22k2], [$btn_backgk2]]);

  if ($payload == 'btn_mandknk2')//Кнопка выбора математики и комп наук
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_pgrp31k2,$btn_pgrp32k2], [$btn_pgrp33k2, $btn_pgrp34k2], [$btn_backgk2]]);

  if ($payload == 'btn_fmandmk2')//Кнопка выбора фундаментальной математики и механики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_grp4k2],  [$btn_backgk2]]);

  if ($payload == 'btn_isbk2')//Кнопка выбора информационных СБ
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_pgrp51k2,$btn_pgrp52k2],  [$btn_backgk2]]);


  //3 курс
  if ($payload == 'btn_k3')//Кнопка выбора третьего курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk3, $btn_pmk3], [$btn_mandknk3], [$btn_fmandmk3], [$btn_isbk3],[$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_mk3')//Кнопка выбора математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KUCHPk3], [$btn_backgk3]]);

  if ($payload == 'btn_pmk3')//Кнопка выбора прикладной математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMMk3], [$btn_backgk3]]);

  if ($payload == 'btn_mandknk3')//Кнопка выбора математики и комп наук
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMAk3,$btn_KFAk3],[$btn_backgk3]]);

  if ($payload == 'btn_fmandmk3')//Кнопка выбора фундаментальной матем. и мех.
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KTFk3],  [$btn_backgk3]]);

  if ($payload == 'btn_isbk3')//Кнопка выбора информационных СБ
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMMk3], [$btn_backgk3]]);

  //4 курс
  if ($payload == 'btn_k4')//Кнопка выбора четвертого курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mk4, $btn_pmk4], [$btn_mandknk4], [$btn_fmandmk4], [$btn_isbk4],[$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_mk4')//Кнопка выбора математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KUCHPk4], [$btn_backgk4]]);

  if ($payload == 'btn_pmk4')//Кнопка выбора прикладной математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMMk4], [$btn_backgk4]]);

  if ($payload == 'btn_mandknk4')//Кнопка выбора математики и комп наук
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMAk4,$btn_KFAk4],[$btn_backgk4]]);

  if ($payload == 'btn_fmandmk4')//Кнопка выбора фундаментальной матем. и мех.
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KTFk4],  [$btn_backgk4]]);

  if ($payload == 'btn_isbk4')//Кнопка выбора информационных СБ
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMMIASBk4], [$btn_backgk4]]);

  //5 курс
  if ($payload == 'btn_k5')//Кнопка выбора пятого курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [ [$btn_fmandmk5],[$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_fmandmk5')//Кнопка выбора фундаментальной матем. и мех.
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KTFk5],  [$btn_backgk5]]);

  //6 курс
  if ($payload == 'btn_k6')//Кнопка выбора шестого курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [ [$btn_isbk6],[$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_isbk4')//Кнопка выбора информационных СБ
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMMk6], [$btn_backgk6]]);

  //Магистры 1 курс
  if ($payload == 'btn_magk1')//Кнопка выбора магистров первого курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mmagk1, $btn_pmmagk1], [$btn_mandknmagk1], [$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_mmagk1')//Кнопка выбора математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KAiMMGmagk1], [$btn_backgmagk1]]);

  if ($payload == 'btn_pmmagk1')//Кнопка выбора прикладной математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMMmagk1], [$btn_backgmagk1]]);

  if ($payload == 'btn_mandknmagk1')//Кнопка выбора математики и комп наук
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMAmagk1,$btn_KFAmagk1],[$btn_backgmagk1]]);

  //Магистры 2 курс
  if ($payload == 'btn_magk2')//Кнопка выбора магистров второго курса
  $vk->sendButton($peer_id, "Какое у вас направление/специальность❓", [[$btn_mmagk2], [$btn_mandknmagk2], [$btn_backn]]);

  //Кнопки выбора направлений/специальностей
  if ($payload == 'btn_mmagk2')//Кнопка выбора математики
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KAiMMGmagk2], [$btn_backgmagk2]]);

  if ($payload == 'btn_mandknmagk2')//Кнопка выбора математики и комп наук
  $vk->sendButton($peer_id, "В какой вы группе❓",[[$btn_KMMmagk2, $btn_KMAmagk2,$btn_KFAmagk2],[$btn_backgmagk2]]);

  //Кнопки выбора групп
  //1 курс
  //Математика
  if ($payload == 'btn_pgrp11k1')//Кнопка выбора подгруппы 1.1
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full], [$btn_backrmk1]]);
  
  if ($payload == 'btn_pgrp12k1')//Кнопка выбора подгруппы 1.2
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full],[$btn_backrmk1]]);

  //Прикладная математика
  if ($payload == 'btn_pgrp21k1')//Кнопка выбора подгруппы 2.1
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full], [$btn_backrpmk1]]);
  
  if ($payload == 'btn_pgrp22k1')//Кнопка выбора подгруппы 2.2
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full],[$btn_backrpmk1]]);

  //Математика и комп науки
  if ($payload == 'btn_pgrp31k1')//Кнопка выбора подгруппы 3.1
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full], [$btn_backrmknk1  ]]);
  
  if ($payload == 'btn_pgrp32k1')//Кнопка выбора подгруппы 3.2
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full],[$btn_backrmknk1]]);

  if ($payload == 'btn_pgrp33k1')//Кнопка выбора подгруппы 3.3
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full], [$btn_backrmknk1]]);
  
  if ($payload == 'btn_pgrp34k1')//Кнопка выбора подгруппы 3.4
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full],[$btn_backrmknk1]]);

  //Фундаментальные математика и механика
  if ($payload == 'btn_grp4k1')//Кнопка выбора подгруппы 3.2
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full],[$btn_backrfmk1]]);

  //Информационно-аналитические системы безопасности
  if ($payload == 'btn_grp5k1')//Кнопка выбора подгруппы 3.2
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓",[[$btn_tod, $btn_tom], [$btn_full],[$btn_backrisbk1]]);