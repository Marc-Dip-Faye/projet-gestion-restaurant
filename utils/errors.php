<?php

function showErrors(array $errors){
    foreach($errors as $champErrors){
        foreach($champErrors as $errors){
            echo $errors;
        }
    }
}