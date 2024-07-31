<?PHP

class ErrorHandler{

    public static function handleException(Throwable $exception): void {
        $errArr = [
            "code" => $exception->getCode(),
            "message" => $exception->getMessage(),
            "file" => $exception->getFile(),
            "line" => $exception->getLine()
        ];
        extract($errArr);
        require(__DIR__ . "/../views/error/error.php");

    }

}