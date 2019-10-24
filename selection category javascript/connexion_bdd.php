<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 2019-10-23
 * Time: 22:50
 */

try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=chloecorfmat_dylancorfmat', 'chloecorfmat_dylan', 'Dyl@n2000', $pdo_options);

}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>