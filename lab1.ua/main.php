<?php
$password = $_POST["password"];
$login = $_POST["login"];

class User
{
    public  $Login;
    public  $password;
    public  $name;
    public  $surname;
    public  $role;
}

/*Admin*/

class Admin extends User
{
    function __construct()
    {
        $this-> password = "zxc123ghj5";
        $this-> Login = "Administrator";
        $this-> role = "Админ";
        $this->name = "Ада";
        $this->surname = "Байрон";
    }
    public function printInfo()
    {
        echo "Здравствуйте" . " " .  $this-> role. " " . $this->name. " " . $this->surname . " " . "Вы можете на сайте делать всё";
    }
}

/*Manager*/

class manager extends User
{
    function __construct()
    {
        $this-> password = "aa11bb22cc33";
        $this-> Login = "Managger";
        $this-> role = "менеджер";
        $this->name = "Иван";
        $this->surname = "Иванов";
    }
    public function printInfo()
    {
        echo "Здравствуйте" . " " . $this-> role. " " . $this->name. " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";
    }
}

/*Client*/

class client extends User
{
    function __construct()
    {
        $this-> password = "11071999";
        $this-> Login = "Client";
        $this-> role = "Клиент";
        $this->name = "Афанасий";
        $this->surname = "Авдотьев";
    }
    public function printInfo()
    {
        echo "Здравствуйте" . " " . $this-> role. " " . $this->name. " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
    }
}


if ($login == "Administrator" and $password == "zxc123ghj5")
{
    $admin = new Admin();
    $admin -> printInfo();

}

elseif ($login == "Client" and $password == "11071999")
{
    $client = new Client();
    $client -> printInfo();
}

elseif ($login == "Managger" and $password == "aa11bb22cc33") {
    $manager = new Manager();
    $manager-> printInfo();
}

else {
    echo "Неверный логин или пароль";
}

?>