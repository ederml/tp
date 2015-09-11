<?php

//header

define('MENU', 'lista_menu');
function get_menu(){
    return array(
        'Home' => ('index.php'),
        'À propos' => ('apropos.php'),
        'Catalogue' => ('catalogue.php'),
        'Contact' => ('formulaire.php'),
    );
}

//catalogue

define('CATALOGUE', 'lista_catalogue');
function get_catalogue(){
    return array(
        'template01' => array(
                        'image'=>'img/img01.jpg',
                        'titre'=> 'T1 Lorem ipsum dolor sit amet',
                        'description' => 'UN Proin eu leo non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Praesent nisl diam, iaculis eget ipsum at, blandit laoreet eros. Nam hendrerit, erat commodo varius consequat, dolor massa tempor massa, vel cursus enim neque pellentesque augue. Aenean ullamcorper et lacus at hendrerit. Phasellus id lectus luctus, congue quam id, tempor justo. Mauris sodales imperdiet nisi eget lacinia. Nulla vehicula eleifend nibh sed malesuada. Praesent eget tortor erat. Nullam a sapien sit amet enim tempor cursus. Sed vehicula nisl sed odio gravida aliquam. Sed metus lorem, vestibulum vel pulvinar vel, condimentum vitae risus. Curabitur in odio ut nisl convallis dapibus sollicitudin vitae orci. Aenean vel molestie massa. Nam vehicula porta arcu, at dapibus nulla pulvinar fermentum. Nam orci enim, elementum ac risus vestibulum, imperdiet placerat mi.',
                        'prix'=> '$ 30,00',
                        'acheter'=> '../img/button.jpg',
        ),

        'template02' => array(
            'image'=>'img/img02.jpg',
            'titre'=> 'T2 Lorem ipsum dolor sit amet',
            'description' => 'DEUX Proin eu leo non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Praesent nisl diam, iaculis eget ipsum at, blandit laoreet eros. Nam hendrerit, erat commodo varius consequat, dolor massa tempor massa, vel cursus enim neque pellentesque augue. Aenean ullamcorper et lacus at hendrerit. Phasellus id lectus luctus, congue quam id, tempor justo. Mauris sodales imperdiet nisi eget lacinia. Nulla vehicula eleifend nibh sed malesuada. Praesent eget tortor erat. Nullam a sapien sit amet enim tempor cursus. Sed vehicula nisl sed odio gravida aliquam. Sed metus lorem, vestibulum vel pulvinar vel, condimentum vitae risus. Curabitur in odio ut nisl convallis dapibus sollicitudin vitae orci. Aenean vel molestie massa. Nam vehicula porta arcu, at dapibus nulla pulvinar fermentum. Nam orci enim, elementum ac risus vestibulum, imperdiet placerat mi.',
            'prix'=> '$ 35,00',
            'acheter'=> 'img/button.jpg',
        ),

        'template03' => array(
            'image'=>'img/img03.jpg',
            'titre'=> 'T3 Lorem ipsum dolor sit amet',
            'description' => 'TROIS Proin eu leo non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Praesent nisl diam, iaculis eget ipsum at, blandit laoreet eros. Nam hendrerit, erat commodo varius consequat, dolor massa tempor massa, vel cursus enim neque pellentesque augue. Aenean ullamcorper et lacus at hendrerit. Phasellus id lectus luctus, congue quam id, tempor justo. Mauris sodales imperdiet nisi eget lacinia. Nulla vehicula eleifend nibh sed malesuada. Praesent eget tortor erat. Nullam a sapien sit amet enim tempor cursus. Sed vehicula nisl sed odio gravida aliquam. Sed metus lorem, vestibulum vel pulvinar vel, condimentum vitae risus. Curabitur in odio ut nisl convallis dapibus sollicitudin vitae orci. Aenean vel molestie massa. Nam vehicula porta arcu, at dapibus nulla pulvinar fermentum. Nam orci enim, elementum ac risus vestibulum, imperdiet placerat mi.',
            'prix'=> '$ 40,00',
            'acheter'=> 'img/button.jpg',

        ),

        'template04' => array(
            'image'=>'img/img04.jpg',
            'titre'=> 'T4 Lorem ipsum dolor sit amet',
            'description' => 'QUATRE Proin eu leo non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Praesent nisl diam, iaculis eget ipsum at, blandit laoreet eros. Nam hendrerit, erat commodo varius consequat, dolor massa tempor massa, vel cursus enim neque pellentesque augue. Aenean ullamcorper et lacus at hendrerit. Phasellus id lectus luctus, congue quam id, tempor justo. Mauris sodales imperdiet nisi eget lacinia. Nulla vehicula eleifend nibh sed malesuada. Praesent eget tortor erat. Nullam a sapien sit amet enim tempor cursus. Sed vehicula nisl sed odio gravida aliquam. Sed metus lorem, vestibulum vel pulvinar vel, condimentum vitae risus. Curabitur in odio ut nisl convallis dapibus sollicitudin vitae orci. Aenean vel molestie massa. Nam vehicula porta arcu, at dapibus nulla pulvinar fermentum. Nam orci enim, elementum ac risus vestibulum, imperdiet placerat mi.',
            'prix'=> '$ 45,00',
            'acheter'=> 'img/button.jpg',
        ),

        'template05' => array(
            'image'=>'img/img05.jpg',
            'titre'=> 'T5 Lorem ipsum dolor sit amet',
            'description' => 'CINQProin eu leo non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Praesent nisl diam, iaculis eget ipsum at, blandit laoreet eros. Nam hendrerit, erat commodo varius consequat, dolor massa tempor massa, vel cursus enim neque pellentesque augue. Aenean ullamcorper et lacus at hendrerit. Phasellus id lectus luctus, congue quam id, tempor justo. Mauris sodales imperdiet nisi eget lacinia. Nulla vehicula eleifend nibh sed malesuada. Praesent eget tortor erat. Nullam a sapien sit amet enim tempor cursus. Sed vehicula nisl sed odio gravida aliquam. Sed metus lorem, vestibulum vel pulvinar vel, condimentum vitae risus. Curabitur in odio ut nisl convallis dapibus sollicitudin vitae orci. Aenean vel molestie massa. Nam vehicula porta arcu, at dapibus nulla pulvinar fermentum. Nam orci enim, elementum ac risus vestibulum, imperdiet placerat mi.',
            'prix'=> '$ 50,00',
            'acheter'=> 'img/button.jpg',
        ),

        'template06' => array(
            'image'=>'img/img06.jpg',
            'titre'=> 'T6 Lorem ipsum dolor sit amet',
            'description' => 'SIX Proin eu leo non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Praesent nisl diam, iaculis eget ipsum at, blandit laoreet eros. Nam hendrerit, erat commodo varius consequat, dolor massa tempor massa, vel cursus enim neque pellentesque augue. Aenean ullamcorper et lacus at hendrerit. Phasellus id lectus luctus, congue quam id, tempor justo. Mauris sodales imperdiet nisi eget lacinia. Nulla vehicula eleifend nibh sed malesuada. Praesent eget tortor erat. Nullam a sapien sit amet enim tempor cursus. Sed vehicula nisl sed odio gravida aliquam. Sed metus lorem, vestibulum vel pulvinar vel, condimentum vitae risus. Curabitur in odio ut nisl convallis dapibus sollicitudin vitae orci. Aenean vel molestie massa. Nam vehicula porta arcu, at dapibus nulla pulvinar fermentum. Nam orci enim, elementum ac risus vestibulum, imperdiet placerat mi.',
            'prix'=> '$ 55,00',
            'acheter'=> 'img/button.jpg',
        ),
    );
}

//pagedetail

define('DETAIL', 'page_detail');
function get_detail(){
    return array(
        'template01' => array(
            'image'=>'img/page_detail01.jpg',
            'titre'=> 'T1 Lorem ipsum dolor sit amet',
            'description' => 'UN Proin eu leo non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Pr non metus vulputate viverra. Curabitur ac augue ante. Praesent nisl diam, iaculis eget ipsum at, blandit laoreet eros. Nam hendrerit, erat commodo varius consequat, dolor massa tempor massa, vel cursus enim neque pellentesque augue. Aenean ullamcorper et lacus at hendrerit. Phasellus id lectus luctus, congue quam id, tempor justo. Mauris sodales imperdiet nisi eget lacinia. Nulla vehicula eleifend nibh sed malesuada. Praesent eget tortor erat. Nullam a sapien sit amet enim tempor cursus. Sed vehicula nisl sed odio gravida aliquam. Sed metus lorem, vestibulum vel pulvinar vel, condimentum vitae risus. Curabitur in odio ut nisl convallis dapibus sollicitudin vitae orci. Aenean vel molestie massa. Nam vehicula porta arcu, at dapibus nulla pulvinar fermentum. Nam orci enim, elementum ac risus vestibulum, imperdiet placerat mi.',
            'prix'=> '$ 30,00',
            'acheter'=> '../img/button.jpg',
        ),

    );
}



