<?php
    namespace App\Utils;

    class View{
        private static function getContentView($view){
            $file = __DIR__.'/../../resources/view/'.$view.'.html';
            return file_exists($file) ? file_get_contents($file) : 'Pagina Não encontrada';
        }

        public static function render($view, $dados = []){
            $contentView = self::getContentView($view);

            $keys = array_keys($dados);
            $keys = array_map(function ($item)
            {
                return "{{".$item."}}";
            }, $keys);

            return str_replace($keys, array_values($dados), $contentView);
        }
    }
?>