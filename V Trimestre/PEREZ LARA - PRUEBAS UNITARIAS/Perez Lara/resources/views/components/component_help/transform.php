<?php

function separate($value) :string{
    return strtolower(str_replace(array(' ', '_de', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú'),
                                  array('_', '', 'A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u'), $value));
}