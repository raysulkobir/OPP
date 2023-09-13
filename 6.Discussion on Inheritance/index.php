      <?php
        class UserData
        {
            public $user;
            public $userId;


            function __construct($userName, $userId)
            {
                $this->user = $userName;
                $this->userId = $userId;
            }

            public  function display()
            {
                echo "User Name {$this->user} and user Id:{$this->userId} \n";
            }
        }

        class Admit extends UserData
        {
            public $level;
            public  function displays()
            {
                echo "User Name {$this->user} and user Id:{$this->userId} and user level {$this->level} \n";
            }
        }

        echo "Main class \n";
        $name = "Md.Rauysul kobir";
        $id = 12345;
        $ur = new UserData($name, $id);
        $ur->display();

        echo "Child class \n";
        $ab = new Admit($name, $id);
        $ab->level = "Md.Akram miya";
        $ab->displays()

        ?>