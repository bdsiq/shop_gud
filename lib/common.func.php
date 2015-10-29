<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/29
 * Time: 14:21
 */
function alertMes($mes,$url){
    echo "<script>alert('{$mes}');</script>";
    echo "<script>window.location='{$url}';</script>";
}
