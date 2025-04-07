<?php //classe para conexao com o banco de dados
    class conexao {
        private static $dbNome = "estoque";
        private static $dbHost = "localhost";
        private static $dbUser = "root";
        private static $Password = "";
        private static $con = null;

        public function __construct() {
            die("A Função init não é permitida!");
        }

        public static function conectar() {
            if (self::$con == null) {
                try {
                    self::$con = new PDO("mysql:host=" . self::$dbHost .
                                         ";dbname=" . self::$dbNome, self::$dbUser, self::$Password);
                    self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $exception) {
                    die("ERRO Conexão " . $exception->getMessage());
                }
            }
            return self::$con;
        }

        public static function desconectar() {
            self::$con = null;
        }
    }
?>