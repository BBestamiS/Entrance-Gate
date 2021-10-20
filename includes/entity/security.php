<!-- Kullanıcıların özelliklerinin bulunduğu dosya -->
<?php
class Security
{
   private $id = null;
   private $name = null;
   private $surname = null;
   private $email = null;
   private $hashed_password = null;
   private $user_possition = null;
   private $gate_id = null;


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


   public function get_gate_id()
   {
      return $this->gate_id;
   }
   public function set_gate_id($gate_id)
   {
      $this->gate_id = $gate_id;
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