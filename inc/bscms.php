<?php

/**
 * BootstapCMS demo engine
 */
class bscms
{

    protected static $urls = array();
    protected static $config = array();
    protected static $request = null;

    public static function init(array $config = array())
    {
        self::$config = array_merge(array(
            "index_file" => basename($_SERVER["SCRIPT_NAME"]),
            "title" => "Backend",
            "rootClasses" => "sf-layout ",
            "assetsVersion" => 1,
            "templateDir" => realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR
                ), $config);

        // Host url
        self::url("host", self::request()->protocol . "://" . self::request()->host . "/");

        // Base public url
        self::url("public", trim(self::url("host") . ltrim(self::request()->basePath, "/"), "/") . "/");

        // Base MVC url
        $index_file = self::config("index_file");
        self::url("base", self::url("public") . (strlen($index_file) > 0 ? $index_file . "/" : ''));

        // Current url without query
        self::url("current", self::url("base") . self::request()->path . "/");

        // Current url with query string
        self::url("currentqs", self::url("current") .
                (!empty(self::request()->query) ? "?" . http_build_query(self::request()->query) : ""));
    }

    /**
     * Config getter/setter
     * @param string $name
     * @param mixed $value
     * @return mixed Setting value
     */
    public static function config($name, $value = null)
    {
        if (func_num_args() > 1) {
            self::$config[$name] = $value;
        }
        return self::$config[$name];
    }

    public static function request()
    {

        if (self::$request === null) {
            $request = new stdClass();
            $request->method = isset($_SERVER['HTTP_X_METHOD']) ? strtoupper($_SERVER['HTTP_X_METHOD']) : (
                    isset($_SERVER['REQUEST_METHOD']) ? strtoupper($_SERVER['REQUEST_METHOD']) : '');

            $request->protocol = (isset($_SERVER['HTTPS']) and ($_SERVER['HTTPS'] != 'off')) ? 'https' : 'http';

            $request->host = isset($_SERVER["HTTP_HOST"]) ? $_SERVER["HTTP_HOST"] : "";

            // Domain and subdomains
            $request->domain = preg_replace('/\:.+/', '', $request->host);
            $request->subdomains = array();
            $subdomains = explode('.', $request->domain);
            if (count($subdomains) > 2) {
                $request->domain = implode(".", array_slice($subdomains, -2, 2));
                $request->subdomains = array_reverse(array_slice($subdomains, 0, -2));
            }

            // Base path
            $request->basePath = '';
            if (isset($_SERVER['SCRIPT_NAME'])) {
                $request->basePath = trim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/ ');
            }

            // Path
            $request->path = explode("?", trim($_SERVER["REQUEST_URI"], " /"), 2);
            $request->path = $request->path[0];
            if (!empty($request->basePath)) {
                $request->path = preg_replace("/^" . str_replace('/', '\/', $request->basePath) . "/", "", $request->path);
            }

            $request->path = preg_replace("/^" . preg_quote(basename($_SERVER["SCRIPT_NAME"])) . "\/?/", "", trim($request->path, " /"));

            // Extension
            $ext = explode(".", $request->path);
            if (count($ext) > 1) {
                $request->extension = array_pop($ext);
            } else {
                $request->extension = "";
            }

            $request->query = $_GET;

            parse_str(file_get_contents("php://input"), $putVars);
            $request->body = array_merge($putVars, $_POST);

            $request->files = $_FILES;
            $request->cookies = $_COOKIE;

            //Server headers
            $request->headers = array();
            foreach ($_SERVER as $k => $v) {
                if (preg_match("/^HTTP_/", $k)) {
                    $name = ucwords(strtolower(str_replace("_", " ", preg_replace("/^HTTP_/", "", $k))));
                    $request->headers[str_replace(" ", "-", $name)] = $v;
                }
            }

            $request->ip = $_SERVER["REMOTE_ADDR"];
            self::$request = $request;
        }
        return self::$request;
    }

    /**
     * URL manager (getter / setter)
     * @param string $name
     * @param mixed $value
     * @return mixed URL value
     */
    public static function url($name, $value = null)
    {
        if (func_num_args() > 1) {
            self::$urls[$name] = $value;
        }
        return self::$urls[$name];
    }

    public static function render($tpl = null, $vars = array("foo"=>"bar"))
    {
        if (empty($tpl)) {
            if (empty(self::request()->path)) {
                $tpl = "home.php";
            } else {
                $tpl = str_replace("/", DIRECTORY_SEPARATOR, self::request()->path) . ".php";
            }
        }

        if (!is_readable(self::config("templateDir") . $tpl)) {
            $tpl = "error.php";
        }

        //expose vars
        
        foreach($vars as $k => $v){
            $$k = $v;
        }
        
        $request = self::$request;
        $config = (object) self::$config;
        $urls = (object) self::$urls;

        ob_start();

        include self::config("templateDir") . $tpl;

        $contents = ob_get_clean();

        return $contents;
    }

}