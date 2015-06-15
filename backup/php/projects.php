<?php
$projectId = $_GET['projectId'];

$json_data = '{
    "images":[
        {
            "bigImg": "pic/projects-big1.jpg",
            "preview": "pic/projects-small1.jpg"
        },
        {
            "bigImg": "pic/projects-big2.jpg",
            "preview": "pic/projects-small2.jpg"
        },
        {
            "bigImg": "pic/projects-big1.jpg",
            "preview": "pic/projects-small3.jpg"
        },
        {
            "bigImg": "pic/projects-big2.jpg",
            "preview": "pic/projects-small4.jpg"
        }
    ],
    "info": "<h2>Big New Officies</h2> <p><strong>Dolor ullamcorper porta a parturient dis condimentum auctor tempor vivamus mi laoreet quisque scelerisque.</strong></p> <p>Augue consectetur interdum a ac massa condimentum adipiscing. Suspendisse tincidunt suscipit a a ridiculus a ullamcorper iaculis vehicula adipiscing per per sociosqu tristique non posuere a. Adipiscing nisl ad consectetur lorem metus a ullamcorper dignissim donec imperdiet parturient a adipiscing vestibulum.</p> <p>Condimentum congue. Blandit est suspendisse lacus a at ridiculus vestibulum consequat egestas.</p>"
}';


$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);

echo $json_data;
exit;
?>