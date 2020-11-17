<?php

switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        //Je vérifie avec la fonction "validate_requests" le $_get que je récupère
        $_get = validate_request($_GET);
        //table obligatoire
        //Je crée la variable "$table" et vérifie si la "table" est récupéré
        //si oui alors on exécute le traitement et si "non" on break ici
        //et on renvoi false
        $table = isset($_get['table']) ? $_get['table'] : null;
        if($table == null){
            echo json_encode(false);        
        break;
    }
    // on crée une variable $id et on l'a vérifie.
    //Si elle est vérifier on continue le traitement si non
    //on renvoit false
    $id = isset($_get['id']) ? $_get['id'] : null;
    $where = isset($_get['where']) ? $_get['where'] : null;
    $orderby = isset($_get['orderby']) ? $_get['orderby'] : null;
    echo json_encode($_get);

    case 'POST':
        $_post = validate_request($_POST);
        //table obligatoire
        $table = isset($_post['table']) ? $_post['table'] : null;
        if($table == null){
            echo json_encode(false);
        
            break;
        }
            $fields = isset($_post['fields']) ? $_post['fields'] : null;
            echo json_encode($_post);                
            break;    

    
    case 'PUT':
        $_del = json_decode(file_get_contents('php://input'), true);
        //table et id obligatoire
        /* ... */
        break;
    case 'DELETE':
        $_del = json_decode(file_get_contents('php://input'), true);
        //table et id obligatoire
        /* ... */
        break;
}

function validate_request($request)
{
    foreach ($request as $k => $v) {
        $request[$k] = htmlspecialchars(strip_tags(stripslashes(trim($v))));
    }
    return $request;
}


