<?php
class Utilitarios {
    
    // Propriedade estática
    public static string $dataAtual;

    // Método estático
    public static function obterData(){
        /* self::propriedade 
        Permite o acesso à propriedade estática. */
        self::$dataAtual = date("d/m/Y");
    }

    public static function definirAtendimento(int $idade):string {
        return $idade >= 60 ? "prioridade" : "normal";
    }

}