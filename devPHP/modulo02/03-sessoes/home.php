<?php

/**
 * essa sessao e iniciada a partir do momento que a sessao do indice e criada, ela depende da criacao, ela NAO cria nada
 */
 
 session_start();
 
echo $_SESSION['cor'].'<br>'.$_SESSION['carros'].'<br>';