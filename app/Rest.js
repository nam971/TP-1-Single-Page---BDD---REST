class Rest{

    static get(data){//table, id, where, orderby
        //Retourne les données "data" récupéré en GET
        //Pas besoin également de préciser la méthode
        //vu que c'est préciser .get
        return $.get("rest/", data);
    }

    static post(data){//table, fields (k,v)
        //Retourne les données "data" récupéré en POST
        //Pas besoin également de préciser la méthode
        //vu que c'est préciser .post
        return $.post("rest/", data);
    }

    static put(data){//table, id, fields (k,v)
        return $.ajax({
            url: 'rest/',
            //On précise la méthode
            type: 'PUT',
            //On fait la conversation des "data" en chaine de 
            //caractère contrairement à .get et .post
            
            data: JSON.stringify(data)
        })
    }

    static delete(data){//table, id
        return $.ajax({
            url: 'rest/',
            //On précise la méthode
            type: 'DELETE',
            //On fait la conversation des "data" en chaine de 
            //caractère
            data: JSON.stringify(data)
        })
    }

}