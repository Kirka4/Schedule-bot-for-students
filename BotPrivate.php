<?php
require_once('simplevk-master/autoload.php');
use DigitalStar\vk_api\VK_api as vk_api; // Основной класс

const VK_KEY = "vk1.a.vmABAUQItmTDEG_1UPJlYkUZwpTjG23EI3FnMpK-rJacxtnRdTmNQdfjRmkXExALpMDSM38A1mxLLECKuIipz95eaLBtfQh6DZukGnbEvQyd90Ra5_OIP6l9TudPAKf7HoEDenUVh0-oA6GaGIoYVYTcWBywz4JkLe8L0ZOmPL3T2bi-XDv6wo7_iLQFUUnZ";
const ACCESS_KEY = "534bd43d";
const VERSION = "5.131";

$vk = vk_api::create(VK_KEY, VERSION)->setConfirm(ACCESS_KEY);

$vk->initVars($peer_id, $message, $payload, $vk_id, $type, $data); // Инициализация переменных

//Задаем кнопки
//Кнопки для первой группы
$btn_back1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_back1']);

//Кнопки для числителя
$btn_1n = $vk->buttonText('😎1-ая группа', 'green', ['command' => 'btn_1n']);
$btn_1ntod = $vk->buttonText('Пары на сегодня', 'green', ['command' => 'btn_1ntod']);
$btn_1ntom = $vk->buttonText('Пары на завтра', 'green', ['command' => 'btn_1ntom']);
$btn_1nfull = $vk->buttonText('Пары на все дни ', 'blue', ['command' => 'btn_1nfull']); 
$btn_backnf1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backnf1']);
$btn_backnf2 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backnf2']);
$btn_5nf = $vk->buttonText('Понедельник', 'blue', ['command' => 'btn_5nf']);
$btn_6nf = $vk->buttonText('Вторник', 'blue', ['command' => 'btn_6nf']);
$btn_7nf = $vk->buttonText('Среда', 'blue', ['command' => 'btn_7nf']);
$btn_8nf = $vk->buttonText('Четверг', 'blue', ['command' => 'btn_8nf']);
$btn_9nf = $vk->buttonText('Пятница', 'blue', ['command' => 'btn_9nf']);
//Кнопки для знаменателя
$btn_1d = $vk->buttonText('😎1-ая группа', 'green', ['command' => 'btn_1d']);
$btn_1dtod = $vk->buttonText('Пары на сегодня', 'green', ['command' => 'btn_1dtod']);
$btn_1dtom = $vk->buttonText('Пары на завтра', 'green', ['command' => 'btn_1dtom']);
$btn_1dfull = $vk->buttonText('Пары на все дни', 'blue', ['command' => 'btn_1dfull']);
$btn_backdf1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backdf1']);
$btn_backdf2 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backdf2']);
$btn_5df = $vk->buttonText('Понедельник', 'blue', ['command' => 'btn_5df']);
$btn_6df = $vk->buttonText('Вторник', 'blue', ['command' => 'btn_6df']);
$btn_7df = $vk->buttonText('Среда', 'blue', ['command' => 'btn_7df']);
$btn_8df = $vk->buttonText('Четверг', 'blue', ['command' => 'btn_8df']);
$btn_9df = $vk->buttonText('Пятница', 'blue', ['command' => 'btn_9df']);
//Кнопки для второй группы
$btn_back2 = $vk->buttonText('Назад', 'red', ['command' => 'btn_back2']);

//Кнопки для числителя
$btn_2n = $vk->buttonText('💀2-ая группа', 'blue', ['command' => 'btn_2n']);
$btn_2ntod = $vk->buttonText('Пары на сегодня', 'green', ['command' => 'btn_2ntod']);
$btn_2ntom = $vk->buttonText('Пары на завтра', 'green', ['command' => 'btn_2ntom']);
$btn_2nfull = $vk->buttonText('Пары на другие дня', 'blue', ['command' => 'btn_2nfull']);
$btn_backns1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backns1']);
$btn_backns2 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backns2']);
$btn_5ns = $vk->buttonText('Понедельник', 'blue', ['command' => 'btn_5ns']);
$btn_6ns = $vk->buttonText('Вторник', 'blue', ['command' => 'btn_6ns']);
$btn_7ns = $vk->buttonText('Среда', 'blue', ['command' => 'btn_7ns']);
$btn_8ns = $vk->buttonText('Четверг', 'blue', ['command' => 'btn_8ns']);
$btn_9ns = $vk->buttonText('Пятница', 'blue', ['command' => 'btn_9ns']);

//Кнопки для знаменателя
$btn_2d = $vk->buttonText('💀2-ая группа', 'blue', ['command' => 'btn_2d']);
$btn_2dtod = $vk->buttonText('Пары на сегодня', 'green', ['command' => 'btn_2dtod']);
$btn_2dtom = $vk->buttonText('Пары на завтра', 'green', ['command' => 'btn_2dtom']);
$btn_2dfull = $vk->buttonText('Пары на другие дня', 'blue', ['command' => 'btn_2dfull']);
$btn_5ds = $vk->buttonText('Понедельник', 'blue', ['command' => 'btn_5ds']);
$btn_6ds = $vk->buttonText('Вторник', 'blue', ['command' => 'btn_6ds']);
$btn_7ds = $vk->buttonText('Среда', 'blue', ['command' => 'btn_7ds']);
$btn_8ds = $vk->buttonText('Четверг', 'blue', ['command' => 'btn_8ds']);
$btn_9ds = $vk->buttonText('Пятница', 'blue', ['command' => 'btn_9ds']);
$btn_backds1 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backds1']);
$btn_backds2 = $vk->buttonText('Назад', 'red', ['command' => 'btn_backds2']);

$vkid = $data->object->from_id; // Узнаем ID пользователя, кто написал нам
$message = $data->object->text; // Само сообщение от пользователя

$message = mb_strtolower($message);

if ($message == 'yfxfnm')
{
  $message = 'начать';
}

//Функции
//Функция проверки числителя/знаменателя
function NumeratorDenumerator($days, $d, $week, $vk, $peer_id, $btn_1d, $btn_2d,$btn_1n, $btn_2n)
{
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      }
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "В какой вы группе❓", [[$btn_1d, $btn_2d]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "В какой вы группе❓", [[$btn_1n, $btn_2n]]);
    }}
}

//Первая группа
//Функции проверки для пар на сегодня и завтра
//Функция проверки числителя/знаменателя 1
function NumeratorDenumeratorf1($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1)
{
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
  1 пара:
  13:25-15:00 Операционные системы ауд.310 Иванков О.Е.
  2 пара:
  15:10-16:45 Английский язык ауд.304 Сергеева А.А.
  15:10-16:45 Немецкий язык пл. Ленина 10 ауд.57 Жеребцова В.А.", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
  1 пара:
  11:30-13:05 Основы программирования ауд.310 Анучина Ю.А.
  2 пара:
  13:25-15:00 Операционные системы ауд.310 Иванков О.Е.
  3 пара:
  15:10-16:45 Английский язык ауд.304 Сергеева А.А.
  15:10-16:45 Немецкий язык пл. Ленина 10 ауд.57 Жеребцова В.А.", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
    }}
}

//Функция проверки числителя/знаменателя 2
function NumeratorDenumeratorf2($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
  1 пара (лекция):
  16:55-18:30 Философия Никитинская 14 ауд.41 Соколова А.Ю.
  2 пара (лекция):
  18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
  1 пара:
  15:10-16:45 Философия Никитинская 14 ауд.41 Соколова А.Ю.
  2 пара (лекция):
  16:55-18:30 Социология Никитинская 14 ауд.41 Козлов К.Н.
  3 пара (лекция):
  18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
    }}
}

//Функция проверки числителя/знаменателя 3
function NumeratorDenumeratorf3($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
  1 пара (лекция):
  9:45-11:20  Теория вероятности ауд.337 Работинская Н.И.
  2 пара (лекция):
  11:30-13:05 ТРПО Никитинская 14 ауд.41 Волобуева С.А.
  3 пара:
  13:25-15:00 ТРПО ауд.310 Волобуева С.А.
  4 пара:
  15:10-16:45 Теория вероятности ауд.304 Работинская Н.И.", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
    1 пара (лекция):
    11:30-13:05 ТРПО Никитинская 14 ауд.41 Волобуева С.А.
    2 пара:
    13:25-15:00 ТРПО ауд.310 Волобуева С.А.
    3 пара:
    15:10-16:45 Теория вероятности ауд.304 Работинская Н.И.
    4 пара:
    16:55-18:30 Английский язык ауд.304 Сергеева А.А.", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
    }}
}
  
//Функция проверки числителя/знаменателя 4
function NumeratorDenumeratorf4($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡ 
  1 пара: 
  8:00-9:35   ТРПО ауд.319 Волобуева С.А.
  2 пара (лекция):
  9:45-11:20  Теория вероятности ауд.314 Работинская
  3 пара:
  11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
  4 пара (лекция):
  13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡ 
  1 пара:
  8:00-9:35 Основы программирования ауд.312 Анучина Ю.А.
  2 пара (лекция):
  9:45-11:20 Теория вероятности ауд.314 Работинская
  3 пара:
  11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
  4 пара (лекция):
  13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
    }} 
}

//Функция проверки числителя/знаменателя 5
function NumeratorDenumeratorf5($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡ 
    1 пара:
    15:00-16:00 Классный час Давыдова М.Б", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡
    1 пара:
    15:00-16:00 Классный час Давыдова М.Б", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
    }} 
}

//Функция проверки числителя/знаменателя 6
function NumeratorDenumeratorf6($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
    }} 
}

//Функция проверки числителя/знаменателя 7
function NumeratorDenumeratorf7($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
    }} 
}

//Функции проверки для пар на все дни
//Функция проверки числителя/знаменателя 1
function NumeratorDenumeratorff1($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf )
{
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
  1 пара:
  13:25-15:00 Операционные системы ауд.310 Иванков О.Е.
  2 пара:
  15:10-16:45 Английский язык ауд.304 Сергеева А.А.
  15:10-16:45 Немецкий язык пл. Ленина 10 ауд.57 Жеребцова В.А.", [[$btn_6df, $btn_7df], [$btn_8df, $btn_9df], [$btn_backdf2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
  1 пара:
  11:30-13:05 Основы программирования ауд.310 Анучина Ю.А.
  2 пара:
  13:25-15:00 Операционные системы ауд.310 Иванков О.Е.
  3 пара:
  15:10-16:45 Английский язык ауд.304 Сергеева А.А.
  15:10-16:45 Немецкий язык пл. Ленина 10 ауд.57 Жеребцова В.А.", [[$btn_6nf, $btn_7nf], [$btn_8nf, $btn_9nf],[$btn_backnf2 ]]);
    }}
}

//Функция проверки числителя/знаменателя 2
function NumeratorDenumeratorff2($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df,$btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf, $btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf )
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
    1 пара (лекция):
    16:55-18:30 Философия Никитинская 14 ауд.41 Соколова А.Ю.
    2 пара (лекция):  
    18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_5df, $btn_7df], [$btn_8df, $btn_9df], [$btn_backdf2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
  1 пара:
  15:10-16:45 Философия Никитинская 14 ауд.41 Соколова А.Ю.
  2 пара (лекция):
  16:55-18:30 Социология Никитинская 14 ауд.41 Козлов К.Н.
  3 пара (лекция):
  18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_5nf, $btn_7nf], [$btn_8nf, $btn_9nf], [$btn_backnf2 ]]);
    }}
}

//Функция проверки числителя/знаменателя 3
function NumeratorDenumeratorff3($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df, $btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf )
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
  1 пара (лекция):
  9:45-11:20  Теория вероятности ауд.337 Работинская Н.И.
  2 пара (лекция):
  11:30-13:05 ТРПО Никитинская 14 ауд.41 Волобуева С.А.
  3 пара:
  13:25-15:00 ТРПО ауд.310 Волобуева С.А.
  4 пара:
  15:10-16:45 Теория вероятности ауд.304 Работинская Н.И.", [[$btn_5df, $btn_6df], [$btn_8df, $btn_9df], [$btn_backdf2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
    1 пара (лекция):
    11:30-13:05 ТРПО Никитинская 14 ауд.41 Волобуева С.А.
    2 пара:
    13:25-15:00 ТРПО ауд.310 Волобуева С.А.
    3 пара:
    15:10-16:45 Теория вероятности ауд.304 Работинская Н.И.
    4 пара:
    16:55-18:30 Английский язык ауд.304 Сергеева А.А.", [[$btn_5nf, $btn_6nf], [$btn_8nf, $btn_9nf], [$btn_backnf2 ]]);
    }}
}
  
//Функция проверки числителя/знаменателя 4
function NumeratorDenumeratorff4($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf )
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡ 
  1 пара: 
  8:00-9:35   ТРПО ауд.319 Волобуева С.А.
  2 пара (лекция):
  9:45-11:20  Теория вероятности ауд.314 Работинская
  3 пара:
  11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
  4 пара (лекция):
  13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_5df, $btn_6df], [$btn_7df, $btn_9df], [$btn_backdf2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡ 
  1 пара:
  8:00-9:35 Основы программирования ауд.312 Анучина Ю.А.
  2 пара (лекция):
  9:45-11:20 Теория вероятности ауд.314 Работинская
  3 пара:
  11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
  4 пара (лекция):
  13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_5nf, $btn_6nf], [$btn_7nf, $btn_9nf], [$btn_backnf2 ]]);
    }} 
}

//Функция проверки числителя/знаменателя 5
function NumeratorDenumeratorff5($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2, $btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df, $btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf )
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡ 
    1 пара:
    15:00-16:00 Классный час Давыдова М.Б", [[$btn_5df,  $btn_6df],[$btn_7df,$btn_8df], [$btn_backdf2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡
    1 пара:
    15:00-16:00 Классный час Давыдова М.Б", [[$btn_5nf,  $btn_6nf],[$btn_7nf,$btn_8nf], [$btn_backnf2 ]]);
    }} 
}

//Вторая группа
//Функции проверки для пар на сегодня и завтра
//Функция проверки числителя/знаменателя 1
function NumeratorDenumerators1($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1)
    {
      {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
    1 пара:
    13:25-15:00 Основы программирования ауд.508П Анучина Ю.А.
    2 пара:
    15:10-16:45 Операционные системы ауд.310 Иванков О.Е.
    3 пара:
    16:55-18:30 Английский язык ауд.304 Сергеева А.А.", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
    1 пара:
    13:25-15:00 Основы программирования ауд.508П Анучина Ю.А.
    2 пара:
    15:10-16:45 Операционные системы ауд.310 Иванков О.Е.
    3 пара:
    16:55-18:30 Английский язык ауд.304 Сергеева А.А.", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
    }}
}

//Функция проверки числителя/знаменателя 2
function NumeratorDenumerators2($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
    1 пара:
    13:25-15:00 Англиский язык Никитинская ауд.41 Сергеева А.А.
    2 пара:
    15:10-16:45 Философия Никитинская 14 ауд.41 Соколова А.Ю.
    3 пара (лекция):
    16:55-18:30 Философия Никитинская 14 ауд.41 Соколова А.Ю.
    4 пара (лекция):
    18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
    1 пара (лекция):
    16:55-18:30 Социология Никитинская 14 ауд.41 Козлов К.Н.
    2 пара (лекция):
    18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
    }}
}

//Функция проверки числителя/знаменателя 3
function NumeratorDenumerators3($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
    1 пара (лекция):
    9:45-11:20 Теория вероятности ауд.337 Работинская Н.И. 
    2 пара (лекция):
    11:30-13:05 ТРПО Никитинская ауд.41 Волобуева С.А.
    3 пара:
    13:25-15:00 Теория вероятности ауд.304 Работинская Н.И. 
    4 пара:
    15:10-16:45 ТРПО ауд.310 Волобуева С.А.", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
    1 пара (лекция):
    11:30-13:05 ТРПО Никитинская 14 ауд.41 Волобуева С.А.
    2 пара:
    13:25-15:00 Теория вероятности ауд.304 Работинская Н.И.
    3 пара:
    15:10-16:45 ТРПО ауд.310 Волобуева С.А.", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
    }}
}
  
//Функция проверки числителя/знаменателя 4
function NumeratorDenumerators4($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡ 
  1 пара: 
  8:00-9:35 ТРПО ауд.319 Волобуева С.А.
  2 пара (лекция):
  9:45-11:20 Теория вероятности ауд.314 Работинская
  3 пара:
  11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
  4 пара (лекция):
  13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡
    1 пара (лекция):
    9:45-11:20 Теория вероятности ауд.314 Работинская
    2 пара:
    11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
    3 пара (лекция):
    13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
    }} 
}

//Функция проверки числителя/знаменателя 5
function NumeratorDenumerators5($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡ 
  1 пара:
  15:00-16:00 Классный час Давыдова М.Б", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡
    1 пара:
    15:00-16:00 Классный час Давыдова М.Б", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
    }} 
}

//Функция проверки числителя/знаменателя 6
function NumeratorDenumerators6($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
    }} 
}

//Функция проверки числителя/знаменателя 7
function NumeratorDenumerators7($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻",  [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "👌🏻Пар нет👌🏻", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
    }} 
}

//Функции проверки для пар на все дни
//Функция проверки числителя/знаменателя 1
function NumeratorDenumeratorsf1($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds)
{
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
    1 пара:
    11:30-13:05 Основы программирования ауд.310 Анучина Ю.А.
    2 пара:
    13:25-15:00 Операционные системы ауд.310 Иванков О.Е.
    3 пара:
    15:10-16:45 Английский язык ауд.304 Сергеева А.А.", [[$btn_6ds, $btn_7ds], [$btn_8ds, $btn_9ds], [$btn_backds2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на понедельник!⚡
  1 пара:
  11:30-13:05 Основы программирования ауд.310 Анучина Ю.А.
  2 пара:
  13:25-15:00 Операционные системы ауд.310 Иванков О.Е.
  3 пара:
  15:10-16:45 Английский язык ауд.304 Сергеева А.А.", [[$btn_6ns, $btn_7ns], [$btn_8ns, $btn_9ns], [$btn_backns2 ]]);
    }}
}

//Функция проверки числителя/знаменателя 2
function NumeratorDenumeratorsf2($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
    1 пара:
    13:25-15:00 Англиский язык Никитинская ауд.41 Сергеева А.А.
    2 пара:
    15:10-16:45 Философия Никитинская 14 ауд.41 Соколова А.Ю.
    3 пара (лекция):
    16:55-18:30 Философия Никитинская 14 ауд.41 Соколова А.Ю.
    4 пара (лекция):
    18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_5ds,  $btn_7ds], [$btn_8ds, $btn_9ds], [$btn_backds2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на вторник!⚡ 
    1 пара (лекция):
    16:55-18:30 Социология Никитинская 14 ауд.41 Козлов К.Н.
    2 пара (лекция):
    18:40-20:00 Социология Никитинская 14 ауд.41 Козлов К.Н.", [[$btn_5ns,  $btn_7ns], [$btn_8ns, $btn_9ns], [$btn_backns2 ]]);
    }}
}

//Функция проверки числителя/знаменателя 3
function NumeratorDenumeratorsf3($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
    1 пара (лекция):
    9:45-11:20 Теория вероятности ауд.337 Работинская Н.И. 
    2 пара (лекция):
    11:30-13:05 ТРПО Никитинская ауд.41 Волобуева С.А.
    3 пара:
    13:25-15:00 Теория вероятности ауд.304 Работинская Н.И. 
    4 пара:
    15:10-16:45 ТРПО ауд.310 Волобуева С.А.", [[$btn_5ds, $btn_6ds, ], [$btn_8ds, $btn_9ds], [$btn_backds2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на среду!⚡ 
    1 пара (лекция):
    11:30-13:05 ТРПО Никитинская 14 ауд.41 Волобуева С.А.
    2 пара:
    13:25-15:00 Теория вероятности ауд.304 Работинская Н.И.
    3 пара:
    15:10-16:45 ТРПО ауд.310 Волобуева С.А.", [[$btn_5ns, $btn_6ns, ], [$btn_8ns, $btn_9ns], [$btn_backns2 ]]);
    }}
}
  
//Функция проверки числителя/знаменателя 4
function NumeratorDenumeratorsf4($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡ 
    1 пара: 
    8:00-9:35 ТРПО ауд.319 Волобуева С.А.
    2 пара (лекция):
    9:45-11:20 Теория вероятности ауд.314 Работинская
    3 пара:
    11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
    4 пара (лекция):
    13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_5ds, $btn_6ds], [$btn_7ds, $btn_9ds], [$btn_backds2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на четверг!⚡ 
    1 пара (лекция):
    9:45-11:20 Теория вероятности ауд.314 Работинская
    2 пара:
    11:30-13:05 Физкультура пл. Ленина 10 Корчагин С.В.
    3 пара (лекция):
    13:25-15:00 Основы программирования ауд.435 Анучина Ю.А.", [[$btn_5ns, $btn_6ns], [$btn_7ns, $btn_9ns], [$btn_backns2 ]]);
    }} 
}

//Функция проверки числителя/знаменателя 5
function NumeratorDenumeratorsf5($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds)
  {
    {
  
        $days = date("w");
      $d=strtotime("+1 day");
    
      if ($days == '0' || '6')
      { 
       $week = date("W",$d);
      }
      else
      {
       $week = date("W");
      } 
        
    if($week%2 === 0)
    {
    //Знаменатель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡ 
    1 пара:
    15:00-16:00 Классный час Давыдова М.Б", [[$btn_5ds, $btn_6ds], [$btn_7ds, $btn_8ds], [$btn_backds2 ]]);
    }
    else
    {
    //Числитель
    $vk->sendButton($peer_id, "⚡Вот расписание на пятницу!⚡
    1 пара:
    15:00-16:00 Классный час Давыдова М.Б", [[$btn_5ns, $btn_6ns], [$btn_7ns, $btn_8ns], [$btn_backns2 ]]);
    }} 
}



if ($data->type == 'message_new')
 {
    if ($message == 'начать' )
   {
    NumeratorDenumerator($days, $d, $week, $vk, $peer_id, $btn_1d, $btn_2d,$btn_1n, $btn_2n);
   }}

if (isset($data->object->payload)) {  //получаем payload
    $payload = json_decode($data->object->payload, True);
} else {
    $payload = null;
}
$payload = $payload['command'];

 
  //Действия кнопок
  //Первая группа
  //Кнопки назад
  //Числитель
  if ($payload == 'btn_backnf1')//От выбора дней недели до выбора групп
  $vk->sendButton($peer_id, "В какой вы группе❓", [[$btn_1n, $btn_2n]]);
  
  if ($payload == 'btn_backnf2')//От расписания до выбора дней недели
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);
  
  //Знаменатель
  if ($payload == 'btn_backdf1')//От выбора дней недели до выбора групп
  $vk->sendButton($peer_id, "В какой вы группе❓", [[$btn_1d, $btn_2d]]); 


  if ($payload == 'btn_backdf2')//От расписания до выбора дней недели
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);

  //Остальные кнопки
  //Первая группа
  //Числитель
  if ($payload == 'btn_1n')//Кнопка выбора первой группы
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓", [[$btn_1ntod, $btn_1ntom], [$btn_1nfull ],[$btn_backnf1]]);

  //Кнопка выбора пар на сегодня у первой группы  
  {$days1n = date("w");
  if ($days1n == '1')
  {  
  if ($payload == 'btn_1ntod')
  NumeratorDenumeratorf1($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '2')
{
  if ($payload == 'btn_1ntod')
  NumeratorDenumeratorf2($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
}
  if ($days1n == '3')
  {
  if ($payload == 'btn_1ntod')
  NumeratorDenumeratorf3($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '4')
  {
  if ($payload == 'btn_1ntod')
  NumeratorDenumeratorf4($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '5')
  {
  if ($payload == 'btn_1ntod')
  NumeratorDenumeratorf5($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '6')
  {
  if ($payload == 'btn_1ntod')
  NumeratorDenumeratorf6($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '0')
  {
  if ($payload == 'btn_1ntod')
  NumeratorDenumeratorf7($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }}
   //Кнопка выбора пар на завтра у первой группы  
  {$days1n = date("w");
  if ($days1n == '1')
 {  
  if ($payload == 'btn_1ntom')
  NumeratorDenumeratorf2($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '2')
{
  if ($payload == 'btn_1ntom')
  NumeratorDenumeratorf3($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
}
  if ($days1n == '3')
  {
  if ($payload == 'btn_1ntom')
  NumeratorDenumeratorf4($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '4')
  {
  if ($payload == 'btn_1ntom')
  NumeratorDenumeratorf5($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '5')
  {
  if ($payload == 'btn_1ntom')
  NumeratorDenumeratorf6($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '6')
  {
  if ($payload == 'btn_1ntom')
  NumeratorDenumeratorf7($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '0')
  {
  if ($payload == 'btn_1ntom')
  NumeratorDenumeratorf1($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  
  }}
  //Кнопка выбора всего расписания
  if ($payload == 'btn_1nfull')
  $vk->sendButton($peer_id, "⚡Вот расписание на все дни!⚡", [[$btn_5nf, $btn_6nf, $btn_7nf], [$btn_8nf, $btn_9nf], [$btn_backnf2 ]]);

  if ($payload == 'btn_5nf')//Кнопка выбора понедельника у первой группы
  NumeratorDenumeratorff1($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );
  
  if ($payload == 'btn_6nf')//Кнопка выбора вторника у первой группы
  NumeratorDenumeratorff2($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );

  if ($payload == 'btn_7nf')//Кнопка выбора среды у первой группы
  NumeratorDenumeratorff3($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );
  
  if ($payload == 'btn_8nf')//Кнопка выбора четверга у первой группы
  NumeratorDenumeratorff4($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );

  if ($payload == 'btn_9nf')//Кнопка выбора пятницы у первой группы
  NumeratorDenumeratorff5($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );

  //Знаменатель
  if ($payload == 'btn_1d')//Кнопка выбора первой группы
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓ ", [[$btn_1dtod, $btn_1dtom], [$btn_1dfull ],[$btn_backdf1]]);
  
  //Кнопка выбора пар на сегодня у первой группы  
  {$days1d = date("w");
  if ($days1d == '1')
  {
  if ($payload == 'btn_1dtod')
  NumeratorDenumeratorf1($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1d == '2')
  {
  if ($payload == 'btn_1dtod')
  NumeratorDenumeratorf2($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1d == '3')
  {
  if ($payload == 'btn_1dtod')
  NumeratorDenumeratorf3($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1d == '4')
  {
  if ($payload == 'btn_1dtod')
  NumeratorDenumeratorf4($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1d == '5')
  {
  if ($payload == 'btn_1dtod')
  NumeratorDenumeratorf5($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }
  if ($days1n == '6')
  {
  if ($payload == 'btn_1dtod')
  NumeratorDenumeratorf6($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  if ($days1n == '0')
  {
  if ($payload == 'btn_1dtod')
  NumeratorDenumeratorf7($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
  }}
  }

  //Кнопка выбора пар на завтра у первой группы  
  {$days1n = date("w");
  if ($days1n == '1')
{  
  if ($payload == 'btn_1dtom')
  NumeratorDenumeratorf2($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
 }
  if ($days1n == '2')
 {
  if ($payload == 'btn_1dtom')
  NumeratorDenumeratorf3($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
}
  if ($days1n == '3')
 {
  if ($payload == 'btn_1dtom')
  NumeratorDenumeratorf4($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
 }
  if ($days1n == '4')
 {
  if ($payload == 'btn_1dtom')
  NumeratorDenumeratorf5($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
 }
  if ($days1n == '5')
 {
  if ($payload == 'btn_1dtom')
  NumeratorDenumeratorf6($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
 }
  if ($days1n == '6')
 {
  if ($payload == 'btn_1dtom')
  NumeratorDenumeratorf7($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
 }
  if ($days1n == '0')
 {
  if ($payload == 'btn_1dtom')
  NumeratorDenumeratorf1($days, $d, $week, $vk, $peer_id, $btn_1dtod, $btn_1dtom, $btn_1dfull, $btn_1ntod, $btn_1ntom, $btn_1nfull, $btn_backnf1, $btn_backdf1);
 }}
  //Кнопка выбора всего расписания
  if ($payload == 'btn_1dfull')
  $vk->sendButton($peer_id, "⚡Вот расписание на все дни!⚡",[[$btn_5df, $btn_6df, $btn_7df], [$btn_8df, $btn_9df], [$btn_backdf2 ]]);

  if ($payload == 'btn_5df')//Кнопка выбора понедельника у первой группы
  NumeratorDenumeratorff1($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );
  
  if ($payload == 'btn_6df')//Кнопка выбора вторника у первой группы
  NumeratorDenumeratorff2($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );

  if ($payload == 'btn_7df')//Кнопка выбора среды у первой группы
  NumeratorDenumeratorff3($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );
  
  if ($payload == 'btn_8df')//Кнопка выбора четверга у первой группы
  NumeratorDenumeratorff4($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );
  
  if ($payload == 'btn_9df')//Кнопка выбора пятницы у первой группы
  NumeratorDenumeratorff5($days, $d, $week, $vk, $peer_id, $btn_backnf2, $btn_backdf2,$btn_5df, $btn_6df, $btn_7df, $btn_8df, $btn_9df,$btn_5nf,$btn_6nf, $btn_7nf, $btn_8nf, $btn_9nf );
  
  //Действия кнопок
  //Вторая группа
  //Кнопки назад
  //Числитель
  if ($payload == 'btn_backns1')//От выбора дней недели до выбора групп
  $vk->sendButton($peer_id, "В какой вы группе❓", [[$btn_1n, $btn_2n]]);

  if ($payload == 'btn_backns2')//От расписания до выбора дней недели
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);
  
  //Знаменатель
  if ($payload == 'btn_backds1')//От выбора дней недели до выбора групп
  $vk->sendButton($peer_id, "В какой вы группе❓", [[$btn_1d, $btn_2d]]);
  
  if ($payload == 'btn_backds2')//От расписания до выбора дней недели
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);

  //Остальные кнопки
  //Вторая группа
  //Числитель
  if ($payload == 'btn_2n')//Кнопка выбора второй группы
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓ ", [[$btn_2ntod, $btn_2ntom], [$btn_2nfull],[$btn_backns1]]);

//Кнопка выбора пар на сегодня у второй группы  
{$days2n = date("w");
if ($days2n == '1')
{
if ($payload == 'btn_2ntod')
NumeratorDenumerators1($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '2')
{
if ($payload == 'btn_2ntod')
NumeratorDenumerators2($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '3')
{
if ($payload == 'btn_2ntod')
NumeratorDenumerators3($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '4')
{
if ($payload == 'btn_2ntod')
NumeratorDenumerators4($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '5')
{
if ($payload == 'btn_2ntod')
NumeratorDenumerators5($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '6')
{
if ($payload == 'btn_2ntod')
NumeratorDenumerators6($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '0')
{
if ($payload == 'btn_2ntod')
NumeratorDenumerators7($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}}

//Кнопка выбора пар на завтра у второй группы  
{$days2n = date("w");
if ($days2n == '1')
{  
if ($payload == 'btn_2ntom')
NumeratorDenumerators2($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '2')
{
if ($payload == 'btn_2ntom')
NumeratorDenumerators3($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '3')
{
if ($payload == 'btn_2ntom')
NumeratorDenumerators4($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '4')
{
if ($payload == 'btn_2ntom')
NumeratorDenumerators5($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '5')
{
if ($payload == 'btn_2ntom')
NumeratorDenumerators6($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '6')
{
if ($payload == 'btn_2ntom')
NumeratorDenumerators7($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}
if ($days2n == '0')
{
if ($payload == 'btn_2ntom')
NumeratorDenumerators1($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
}}

//Кнопка выбора всего расписания
if ($payload == 'btn_2nfull')
$vk->sendButton($peer_id, "⚡Вот расписание на все дни!⚡",[[$btn_5ns, $btn_6ns, $btn_7ns], [$btn_8ns, $btn_9ns], [$btn_backns2 ]]);

  if ($payload == 'btn_5ns')//Кнопка выбора понедельника у второй группы
  NumeratorDenumeratorsf1($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);
  
  if ($payload == 'btn_6ns')//Кнопка выбора вторника у второй группы
  NumeratorDenumeratorsf2($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);

  if ($payload == 'btn_7ns')//Кнопка выбора среды у второй группы
  NumeratorDenumeratorsf3($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);
  
  if ($payload == 'btn_8ns')//Кнопка выбора четверга у второй группы
  NumeratorDenumeratorsf4($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);

  if ($payload == 'btn_9ns')//Кнопка выбора пятницы у второй группы
  NumeratorDenumeratorsf5($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);

  //Знаменатель 
  if ($payload == 'btn_2d')//Кнопка выбора второй группы
  $vk->sendButton($peer_id, "На какой день недели вам нужно расписание❓ ", [[$btn_2dtod, $btn_2dtom], [$btn_2dfull ],[$btn_backds1]]);

  //Кнопка выбора пар на сегодня у второй группы  
  {$days2d = date("w");
  if ($days2d == '1')
  {
  if ($payload == 'btn_2dtod')
  NumeratorDenumerators1($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '2')
  {
  if ($payload == 'btn_2dtod')
  NumeratorDenumerators2($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '3')
  {
  if ($payload == 'btn_2dtod')
  NumeratorDenumerators3($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '4')
  {
  if ($payload == 'btn_2dtod')
  NumeratorDenumerators4($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '5')
  {
  if ($payload == 'btn_2dtod')
  NumeratorDenumerators5($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2n == '6')
  {
  if ($payload == 'btn_2dtod')
  NumeratorDenumerators6($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2n == '0')
  {
  if ($payload == 'btn_2dtod')
  NumeratorDenumerators7($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }}
  
  //Кнопка выбора пар на завтра у второй группы  
  {$days2d = date("w");
  if ($days2d == '1')
  {  
  if ($payload == 'btn_2dtom')
  NumeratorDenumerators2($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '2')
  {
  if ($payload == 'btn_2dtom')
  NumeratorDenumerators3($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '3')
  {
  if ($payload == 'btn_2dtom')
  NumeratorDenumerators4($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '4')
  {
  if ($payload == 'btn_2dtom')
  NumeratorDenumerators5($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '5')
  {
  if ($payload == 'btn_2dtom')
  NumeratorDenumerators6($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '6')
  {
  if ($payload == 'btn_2dtom')
  NumeratorDenumerators7($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }
  if ($days2d == '0')
  {
  if ($payload == 'btn_2dtom')
  NumeratorDenumerators1($days, $d, $week, $vk, $peer_id, $btn_2dtod, $btn_2dtom, $btn_2dfull, $btn_2ntod, $btn_2ntom, $btn_2nfull, $btn_backns1, $btn_backds1);
  }}

  //Кнопка выбора всего расписания
  if ($payload == 'btn_2dfull')
  $vk->sendButton($peer_id, "⚡Вот расписание на все дни!⚡",[[$btn_5ds, $btn_6ds, $btn_7ds], [$btn_8ds, $btn_9ds], [$btn_backds2 ]]);

  if ($payload == 'btn_5ds')//Кнопка выбора понедельника у второй группы
  NumeratorDenumeratorsf1($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);
  
  if ($payload == 'btn_6ds')//Кнопка выбора вторника у второй группы
  NumeratorDenumeratorsf2($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);

  if ($payload == 'btn_7ds')//Кнопка выбора среды у второй группы
  NumeratorDenumeratorsf3($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);
  
  if ($payload == 'btn_8ds')//Кнопка выбора четверга у второй группы
  NumeratorDenumeratorsf4($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);

  if ($payload == 'btn_9ds')//Кнопка выбора пятницы у второй группы
  NumeratorDenumeratorsf5($days, $d, $week, $vk, $peer_id, $btn_backns2, $btn_backds2, $btn_5ns, $btn_6ns, $btn_7ns, $btn_8ns, $btn_9ns, $btn_5ds, $btn_6ds, $btn_7ds, $btn_8ds, $btn_9ds);   