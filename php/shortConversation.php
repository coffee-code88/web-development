  <?php
        class Person{
            public $name;
            public $age;
            public $role;
            
            public function __construct($name, $age, $role){
                $this->name= $name;
                $this->age = $age;
                $this->role = $role;
            }
            
            public function talk($msg){
                return $msg;
            }
        }
        
        $teacher = new Person("Taylor Swift", 30, "teacher");
        $student = new Person("Eminem", 22, "student");
        
       echo "Teacher says: " . $teacher->talk("What is your name ?");
       echo "<br />";
        echo "Student says: " . $student->talk("I am Eminem");
?>
