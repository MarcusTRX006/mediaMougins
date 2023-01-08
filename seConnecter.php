<?php include("vues/header.php"); ?>

<?php
// si l'utilisateur a cliqué sur le bouton inscription ...
if(isset($_POST['Connecter']))
{
    // si le champs et vide ou on recupère la saissi de l'utilisateur
    // Expression régulière preg_match qui est différent que se qui est demandé
    // 
    
    // filter_var fonction qui permet de vérifier si se qui est saisi est bien un email
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $message = "Rentrer une adresse email valide !";
    }
    elseif(empty($_POST['password']))
    {
        $message = 'Rentrer un mot de passe valide !';
    }
    else
    {
        require_once 'connexion.php';
        
        // pour éviter les doublons
        
        $req1 = $monPdo->prepare('SELECT * FROM bibliomougins.adherent WHERE email = :email');
        
        $req1->bindvalue(':email', $_POST['email']);
        $req1->execute();
        $result1 = $req1->fetch();
        
        if($result1)
        {
            $message = 'Vous êtes bien connecté';
        }
        else
        {
            //Hash le password utilisé
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            // permet d'inserré les informations dans notre base de donnée
            $requette = $monPdo->prepare('INSERT INTO bibliomougins.adherent(username,email,password) VALUES (:username, :email, :password)');
            
            $requette->bindvalue('username', $_POST['username']);
            $requette->bindvalue('email', $_POST['email']);
            $requette->bindvalue('password', $password);
            
            $requette->execute();
            
            $message = 'Vous êtes bien enregistré';
        }
    }
}
?>

<section class="bg-light py-5 mt-5">
    <div id="login">          
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <?php if (isset ($message)) echo $message;?>
                        <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info"><i class="fa fa-lock" aria-hidden="true"></i> Se connecter</h3> 
                                <div class="form-group">
                                    <label for="email" class="text-info"><i class="fas fa-envelope"></i> Adresse email :</label><br>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="password" class="text-info"><i class="fa fa-key icon"></i> Password :</label><br>
                                        <input type="text" name="password" id="password" class="form-control">
                                    </div>
                                </div>

                                    <input type="submit" name="Connecter" class="btn btn-primary btn-md" value="Connecter">
                                    <a href="deconnexion.php" class="btn btn-primary btn-md">Déconnexion</a>
                                    <a href="index.php" class="btn btn-primary btn-md">Retour accueil</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
</section>
<?php include("vues/footer.php"); ?>