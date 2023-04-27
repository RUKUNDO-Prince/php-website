<?php
    $people = ['Steve', 'John', 'Kathy', 'Evan', 'Anthony', 'Tom', 'Rhonda', 'Hal', 'Ernie', 'Johanna', 'Farrah', 'Linda', 'Shawn', 'Olivia', 'Derek', 'Prince', 'Amanda', 'Rachel', 'Katie', 'Jillian', 'Jose', 'Malcom', 'Greg', 'Mary', 'Brad', 'Mike'];

    // GET QUERRY STRING
    $q = $_REQUEST['q'];
    $suggestion = "";

    // GET SUGGESTIONS
    if ($q !== '') {
        $q = strtolower($q);
        $len = strlen($q);
        foreach($people as $person){
            if (stristr($q, substr($person, 0, $len))) {
                if ($suggestion == '') {
                    $suggestion = $person;
                }else{
                    $suggestion .= ", $person";
                }
            }
        }
    }
    echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>