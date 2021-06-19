<?php

//restituisce vero se l'utente con ID specificato nella variabile username_id è admin, falso altrimenti
function is_admin($conn, $username_id)
{
    $sql = "SELECT * FROM `admin` WHERE ID_utente='$username_id' ";
    $result = $conn->query($sql);
    $b = $result->fetch_all();
    if (empty($b)) {
        return false;
    } else {
        return true;
    }
}

//restituisce l'ID dell'utente con username specificato nella variabile $username
function get_username_id($conn, $username)
{

    $sql = "SELECT id FROM `utenti` WHERE username='$username' ";
    $result = $conn->query($sql);
    $b = $result->fetch_all();
    //var_dump($b);
    $username_id = $b[0][0];
    //leggere il numero restituito dalla query
    // ritornarlo

    return $username_id;
}

//restituisce un array con i dettagli di tutti i prodotti
function leggiprodotti($conn){
    $sql = "SELECT id,nome,prezzo,descrizione,immagine FROM `prodotti`";
    $result = $conn->query($sql);
    $tutti_i_prodotti=array();
    while ($b = $result->fetch_assoc()){
        array_push($tutti_i_prodotti,$b);
    }
    return $tutti_i_prodotti;
}

function get_prodotti($conn, $user_id){
    $sql = "SELECT * FROM `carrelli` 
    JOIN prodotti_carrelli ON prodotti_carrelli.id_carrello=carrelli.id 
    JOIN prodotti ON prodotti_carrelli.id_prodotto=prodotti.id
    WHERE id_proprietario=$user_id";
    $query = $conn->query($sql);
    $result = $query -> fetch_all();
    return $result;
}

function get_id_utente_loggato($conn){
    $sql= "SELECT ID FROM `utenti` WHERE username=\"". $_SESSION["username"] . "\";";
    $query = $conn->query($sql);
    $result = $query->fetch_all();
    return $result[0][0];

}

function get_id_carrello($conn,$id_utente)
{
    $sql = "SELECT ID FROM `carrelli` WHERE id_proprietario=$id_utente";
    $query = $conn->query($sql);
    $result = $query->fetch_all();
    return $result[0][0];
}

function inserisci_prodotto($conn,$id_prodotto,$id_carrello,$quantita){
    $sql = "INSERT INTO `prodotti_carrelli` (`id_carrello`, `id_prodotto`, `quantita`) VALUES ( '$id_carrello', '$id_prodotto', '$quantita');";
    $conn->query($sql);
}
