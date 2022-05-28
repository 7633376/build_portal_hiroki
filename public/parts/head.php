<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- <link rel="stylesheet" href="<?php // echo PUBLIC_DIR; ?>./assets/style.css"> -->

     <!-- @todo コールバック関数利用してhead内に出力予定 -->
     <link rel="stylesheet" href='../../parts/code/code.css'>
     
    <style>

        h1,h2,h3{
            padding-left: 10px;
            border-left: 10px solid #4774ef;
        }
        
        li{
            list-style: none;
        }

        header{
            background-color:#bdebc6;
        }
        
        #main_container_wrap{
            display: flex;
            justify-content: center;
        }

        #main_container_wrap .main_container{
            background-color:#e7e6e6;
            width: 80%;
            max-width: 1000px;
        
            display: flex;
            justify-content: center;
        }

        footer{
            background-color:#85c5ef;
        }



        @media screen and (max-width:700px){

            #main_container_wrap .main_container{
                width: 100%;
            }

            .pre_wrap_wrap{
                width: 90vw;
            }
        }
    </style>

</head>