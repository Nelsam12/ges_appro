<?php

namespace Controller;

use Core\Controller;
use Core\Session;
use Model\UserModel;

class SecuriteController extends Controller
{
    private UserModel $userModel;
    public function __construct()
    {
        parent::__construct();
        $this->layout = "connection";
        $this->userModel = new UserModel();
        $this->load();
    }

    public function load()
    {
        if (isset($_REQUEST['action'])) {
            if ($_REQUEST['action'] == 'form') {
                $this->chargerForm();
            } elseif ($_REQUEST['action'] == 'deconnection') {
                $this->deconnection();
            } elseif ($_REQUEST["action"] == "connection") {
                unset($_POST['controller']);
                unset($_POST['action']);
                $this->connection($_POST);
            }
        } else {
            $this->chargerForm();
        }
    }

    public function chargerForm()
    {
        parent::renderView("securite/form");
    }

    public function deconnection()
    {
        Session::fermerSession();
        $this->chargerForm();
    }

    public function connection(array $data)
    {
        extract($data);
        $userConnect = $this->userModel->getUserByLoginAndPassword($login, $password);
        if ($userConnect == false) {
            // L'utilisateur n'existe pas ou bien champ incorrect
            parent::redirecteToRoute("controller=securite&action=form");
        }else{
            // Utilisateur trouvé
            Session::add("userConnect", $userConnect);
            parent::redirecteToRoute("controller=article&action=lister");
        }
    }
}
