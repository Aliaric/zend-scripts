<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 12:44
 */

try {
    echo 50/0; // Warning: Division by zero
} catch (Exception $e) {
    echo "Exception caught!";
} catch (Throwable $e) {
    echo " Throwable caught!";
} catch (Error $e) {
    echo "Error caught!";
} catch (DivisionByZeroError $e) {
    echo "DivisionByZeroError caught!";
}

// none of the above