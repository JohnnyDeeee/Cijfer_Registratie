<?php
    class User extends Model
    {
        public function insert_into_users($post)
        {
            //echo "Ik zit in de User Model";
            $query = "INSERT INTO `users` (`id`,
                                            `voornaam`,
                                            `tussenvoegsel`,
                                            `achternaam`)
                                            VALUES (Null,
                                            '".$post['firstname']."',
                                            '".$post['infix']."',
                                            '".$post['lastname']."')";
            
            $this->query($query);
        }
        
        public function update_in_users($post, $id)
        {
            $query = "UPDATE `users` SET voornaam='".$post['firstname']."', tussenvoegsel='".$post['infix']."', achternaam='".$post['lastname']."' WHERE id='".$id."'";
            
            $this->query($query);
        }
        
        public function delete_from_users($id)
        {
            $query = "DELETE FROM `users` WHERE `id` = '".$id."'";
            
            $this->query($query);
        }
        
        public function select_all()
        {
            $query = "SELECT * FROM `users`";
            return $this->query($query);
        } 
        
        public function select_by_id($id)
        {
            $query = "SELECT * FROM `users` WHERE id='".$id."'";
            return $this->query($query);
        }
    }
?>