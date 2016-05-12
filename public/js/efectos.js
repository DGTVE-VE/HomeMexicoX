/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $(".div-curso").hover(
            function () {
                console.log ('in');
                $(this).find (".img-tin").addClass('opacity1');
                $(this).find (".img-tin").next().show();
            },
            function () {
                console.log ('out');
                $(this).find (".img-tin").removeClass('opacity1');
                $(this).find (".img-tin").next().hide();
            }
    );




});
