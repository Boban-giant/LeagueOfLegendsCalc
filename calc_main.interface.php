<?php
interface mainCalculates {
  
  function calcDamage (); // функция которая описывает логику расчётов конечного демеджа 
  function calcPhisicalDamage (); //Описывает физический дэмедж 
  function calcMagicalDamage (); // описывает магический урон
  
  ///// Ссылки на механику http://na.leagueoflegends.com/board/showthread.php?t=3287   
  ///// Механика на русском http://lol-game.ru/threads/voprosy-ob-igrovoj-mexanike.1576/#armor
}

?>
