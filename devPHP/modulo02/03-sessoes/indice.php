<?php

/**
 * iniciando sessao 
 */
 session_start();
 
 $_SESSION['cor'] = 'verde';
 $_SESSION['carros'] = 'fusca';
 
 echo $_SESSION['cor'].'<br>'.$_SESSION['carros'].'<br>';