<!-- Kullanıcıların özelliklerinin bulunduğu dosya -->
<?php
class Persons
{
   private $id = null;
   private $name = null;
   private $surname = null;
   private $email = null;
   private $hashed_password = null;
   private $plate = null;
   private $faculty_id = null;
   private $department_id = null;
   private $possition_id = null;
   private $user_possition = null;

   public function get_id()
   {
      return $this->id;
   }
   public function set_id($id)
   {
      $this->id = $id;
   }


   public function get_name()
   {
      return $this->name;
   }
   public function set_name($name)
   {
      $this->name = $name;
   }


   public function get_surname()
   {
      return $this->surname;
   }
   public function set_surname($surname)
   {
      $this->surname = $surname;
   }


   public function get_plate()
   {
      return $this->plate;
   }
   public function set_plate($plate)
   {
      $this->plate = $plate;
   }


   public function get_email()
   {
      return $this->email;
   }
   public function set_email($email)
   {
      $this->email = $email;
   }


   public function get_hashed_password()
   {
      return $this->hashed_password;
   }
   public function set_hashed_password($hashed_password)
   {
      $this->hashed_password = $hashed_password;
   }


   public function get_faculty_id()
   {
      return $this->faculty_id;
   }
   public function set_faculty_id($faculty_id)
   {
      $this->faculty_id = $faculty_id;
   }


   public function get_department_id()
   {
      return $this->department_id;
   }
   public function set_department_id($department_id)
   {
      $this->department_id = $department_id;
   }

   
   public function get_possition_id()
   {
      return $this->possition_id;
   }
   public function set_possition_id($possition_id)
   {
      $this->possition_id = $possition_id;
   }
   public function get_user_possition ()
   {
      return $this->user_possition;
   }
   public function set_user_possition ($user_possition)
   {
      $this->user_possition  = $user_possition ;
   }
}