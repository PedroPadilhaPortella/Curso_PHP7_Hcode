<?php
session_start();

//depois de verificar login e senha, reinicie o ID da sessão, assim ele sempre vai gerar um novo id de sessão
session_destroy();
session_start();
session_regenerate_id();

echo session_id();