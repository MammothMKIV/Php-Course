<?php

interface UserProvider {
    function getUserByLogin($login);
}