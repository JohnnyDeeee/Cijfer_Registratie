<?php
class UsersController extends Controller
{
   
    //Constructor
    public function __construct($model, $controllerName, $action)
    {
        parent::__construct($model, $controllerName, $action);
        
    }
    
    //Methods
    public function adduser()
    {  
        if (isset($_POST['submit']))
        {
            $this->set('header', "Het record is toegevoegd");
             //echo "HALLO";EXIT();
            $this->model->insert_into_users($_POST);
            header("refresh:3;url=".BASE_URL."");
        }
        else
        {
            $introtext = "Geef uw naam:";
            $this->set('header', $introtext);
        }
    }
    
    public function updateuser($id)
    {
        if (isset($_POST['submit']))
        {
            $this->set('header', "Het record is geupdate!");
            $this->model->update_in_users($_POST, $id);
            header("refresh:3;url=".BASE_URL."generals/homepage");
        }
        else
        {
            $introtext = "Update user:";
            $this->set('header', $introtext);
            $this->set('id', $id);
        }
    }
    
    public function deleteuser($id)
    {
        if (isset($_POST['submit']))
        {
            $this->set('header', "Het record is succesvol verwijderd!");
            $this->model->delete_from_users($id);
            header("refresh:3;url=".BASE_URL."");
        }
        else
        {
            $introtext = "Delete record:";
            $this->set('header', $introtext);
            
            $this->set('id', $id);
            
            $result = $this->model->select_by_id($id);
            foreach ($result as $value)
            {
                $firstname = $value->voornaam;
                $infix = $value->tussenvoegsel;
                $lastname = $value->achternaam;
            }
            
            $this->set('firstname', $firstname);
            $this->set('infix', $infix);
            $this->set('lastname', $lastname);
        }
    }
    
    public function selectuser($mode)
    {
        $this->set('header', 'Alle gebruikers in de users tabel');
        $result = $this->model->select_all();
        $table = "<table border=1>";
        $table.= "<tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Infix</th>
                    <th>Lastname</th>
                </tr>";
        
        if ($mode == 0)
        {
            foreach ($result as $value)
            {
                $table .= "<tr>
                <td>".$value->id."</td>
                <td>".$value->voornaam."</td>
                <td>".$value->tussenvoegsel."</td>
                <td>".$value->achternaam."</td>
                </tr>";
            }
        }
        else if ($mode == 1)
        {
            foreach ($result as $value)
            {
                $table .= "<tr>
                <td>".$value->id."</td>
                <td>".$value->voornaam."</td>
                <td>".$value->tussenvoegsel."</td>
                <td>".$value->achternaam."</td>
                <td><a href='".BASE_URL."users/updateuser/".$value->id."'><img src='".BASE_URL."img/update.png' alt='update'></a></td>
                </tr>";
            }
        }
        else if ($mode == 2)
        {
            foreach ($result as $value)
            {
                $table .= "<tr>
                <td>".$value->id."</td>
                <td>".$value->voornaam."</td>
                <td>".$value->tussenvoegsel."</td>
                <td>".$value->achternaam."</td>
                <td><a href='".BASE_URL."users/deleteuser/".$value->id."'><img src='".BASE_URL."img/delete.png' alt='delete'></a></td>
                </tr>";
            }
        }
        
        $table .= "</table>";
        $this->set('table', $table);
    }
    
}


?>