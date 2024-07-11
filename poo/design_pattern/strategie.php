<?php
/**
 * The Strategy pattern is a behavioral design model that allows you to define a family of algorithms,
 * encapsulate each of them and make them interchangeable. This allows the algorithm to vary independently of the clients using it.
 */
interface Logger {
    public function log($data);
}
class LogToFile implements Logger{
    public function log($data)
    {
        var_dump("Log the data to a file");
    }

}

class LogToDatabase implements Logger{
    public function log($data)
    {
        var_dump('log the data to the database');
    }

}

class LogToXWebService implements Logger{
    public function log($data)
    {
        var_dump('Log the data to a Saas site.');
    }
}

class App {
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}

$app = new App;

$app->log("Some information here", new LogToDatabase);